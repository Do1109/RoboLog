$.ajax({
  url: './showImage',
  type: 'get',
}).done(function($puramo_image_list){
  var b64 = "data:image/png;base64," + btoa(String.fromCharCode.apply(String, $puramo_image_list));
console.log(b64)});