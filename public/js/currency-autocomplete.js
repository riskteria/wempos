$(function(){
  var currencies = [
    { value: 'Afghan afghani', data: 'AFN' },
    { value: 'SMK Telkom Sandy Putra', data: 'SMK Telkom Sandy Putra'},
    { value: 'SD PANGUDI LUHUR JAKARTA SELATAN', data: 'SD PANGUDI LUHUR JAKARTA SELATAN'},
    { value: 'SDN 1 Mangkujayan', data: 'SDN 1 Mangkujayan'},
    { value: 'SMA Negeri 1 Cisarua', data: 'SMA Negeri 1 Cisarua'},
    { value: 'SMA Negeri 74 jakarta', data: 'SMA Negeri 74 jakarta'},
    { value: 'SMA Negeri 78 Jakarta', data: 'SMA Negeri 78 Jakarta'}
  ];
  
  // setup autocomplete function pulling from currencies[] array
  $('#autocomplete1').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
      var thehtml = '<strong>Currency Name:</strong> ' + suggestion.value + ' <br> <strong>Symbol:</strong> ' + suggestion.data;
      $('#outputcontent').html(thehtml);
    }
  });

  $('#autocomplete2').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
      var thehtml = '<strong>Currency Name:</strong> ' + suggestion.value + ' <br> <strong>Symbol:</strong> ' + suggestion.data;
      $('#outputcontent').html(thehtml);
    }
  });
  

});