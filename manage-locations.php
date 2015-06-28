<?php
  $secret = file_get_contents( dirname ( __FILE__ ) . '/../private/locations-secret' );
  if( ! ( isset( $_REQUEST['secret'] ) && $_REQUEST['secret'] == $secret ) ) {
    header('HTTP/1.1 401 Unauthorized');
    echo 'Unauthorized';
    exit;
  }
  
  if( isset( $_POST['locations'] ) ) {
    $target_dir = dirname ( __FILE__ );
    $target_file = $target_dir . "/locations.json";
    file_put_contents( $target_file, json_encode( $_POST['locations'] ) );
    echo 'success';
    exit;
  }
?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
  <script type="text/javascript">
    var secret = '<?php echo $secret; ?>';
    
    var rowTemplate = '';
    rowTemplate += '<tr class="location-row">';
    rowTemplate += '  <td><input type="text" name="name" /></td>';
    rowTemplate += '  <td><input type="text" name="website" /></td>';
    rowTemplate += '  <td><input type="text" name="city_state_zip" /></td>';
    rowTemplate += '  <td><input type="text" name="lat" /></td>';
    rowTemplate += '  <td><input type="text" name="long" /></td>';
    rowTemplate += '  <td><button class="delete-location-btn">Delete</button></td>';
    rowTemplate += '</tr>';
    
    $(document).on("click", "#add-location-btn", function(e) {
      e.preventDefault();
      $('#locations-table tbody').append( rowTemplate );
    });
    
    $(document).on("click", "#save-btn", function(e) {
      e.preventDefault();
      var locations = new Array();
      $('.location-row').each( function() {
        locations.push({
          "name": $(this).find('[name="name"]').val(),
          "website": $(this).find('[name="website"]').val(),
          "city_state_zip": $(this).find('[name="city_state_zip"]').val(),
          "lat": $(this).find('[name="lat"]').val(),
          "long": $(this).find('[name="long"]').val()
        });
      });
      $.post( "/manage-locations.php", { locations: locations, secret: secret }, function( result ) {
        alert( result );
      });
    });
    
    $(document).on("click", ".delete-location-btn", function(e) {
      e.preventDefault();
      $(this).parents('.location-row').remove();
    });
  </script>
</head>
<body>
  <h1>Manage Locations</h1>
  <table id="locations-table" border="1" cellpadding="2" cellspacing="0">
    <thead>
      <tr>
        <th>Name</th>
        <th>Website</th>
        <th>City, State Zip</th>
        <th>Longitude</th>
        <th>Latitude</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php $locations = json_decode( file_get_contents( "locations.json" ) ); ?>
      <?php foreach ( $locations as $location ) : ?>
        <tr class="location-row">
          <td><input name="name" value="<?php echo $location->name; ?>" /></td>
          <td><input name="website" value="<?php echo $location->website; ?>" /></td>
          <td><input name="city_state_zip" value="<?php echo $location->city_state_zip; ?>" /></td>
          <td><input name="lat" value="<?php echo $location->lat; ?>" /></td>
          <td><input name="long" value="<?php echo $location->long; ?>" /></td>
          <td><button class="delete-location-btn">Delete</button></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="6"><button id="add-location-btn">Add Location</button></td>
      </tr>
    </tfoot>
  </table>
  <p><button id="save-btn">Save</button></p>
</body>
</html>
