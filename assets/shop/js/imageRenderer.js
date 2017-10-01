var collectionsImageRenderer = function(value, metaData, record, rowIndex, colIndex, store) {
    if (value != '' && value != null) {
		imageUrl = JSON.parse(value);
//console.log(imageUrl[0].image)
       return '<img src="/assets/shop/images/'+ imageUrl[0].image + '" width="64">';
   }
 };