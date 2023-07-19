 // Mengambil elemen select pertama
 var select1 = document.getElementById('kategori-1');

 // Menambahkan event listener
 select1.addEventListener('change', function() {
     // Memanggil fungsi untuk memperbarui opsi pada select kedua
     updateSelect2Options();
 });

 function updateSelect2Options() {
     // Mengambil elemen select kedua
     var select2 = document.getElementById('kategori-2');

     // Mengambil nilai select pertama
     var select1Value = select1.value;

     // Menghapus semua opsi yang ada pada select kedua
     select2.innerHTML = '';

     // Menambahkan opsi pada select kedua berdasarkan nilai select pertama
     if (select1Value === 'baju') {
         addOption(select2,'Select Size',true);
         addOption(select2, 'XS');
         addOption(select2, 'S');
         addOption(select2, 'M');
         addOption(select2, 'L');
         addOption(select2, 'XL');
         addOption(select2, 'XXL');
         addOption(select2, '3XL');
     } else if (select1Value === 'sepatu') {
        addOption(select2,'Select Size',true);
         addOption(select2, '38');
         addOption(select2, '39');
         addOption(select2, '40');
     } else if (select1Value === 'celana') {
        addOption(select2,'Select Size',true);
         addOption(select2, 'XS');
         addOption(select2, 'S');
         addOption(select2, 'M');
         addOption(select2, 'L');
         addOption(select2, 'XL');
         addOption(select2, 'XXL');
         addOption(select2, '3XL');
     }
 }
 // Fungsi bantu untuk menambahkan opsi pada select
 function addOption(select, value,disabled) {
     var option = document.createElement('option');
     option.value = value;
     option.text = value;
     if (disabled) {
        option.disabled = true;
        option.selected = true;
    }
     select.appendChild(option);
 }