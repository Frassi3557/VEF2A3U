$.ajax({
  'url': 'http://apis.is/petrol',
  'type': 'GET',
  'dataType': 'json',
  'success': function(response) {
    console.log(response);
  }
});