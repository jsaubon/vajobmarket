
var showbtn = document.querySelector('.user-btn')
var lilnav = document.querySelector('.small-nav')

showbtn.addEventListener('mouseover',function(){
    lilnav.style.display ='block'
})
lilnav.addEventListener('mouseover',function(){
    lilnav.style.display ='block'
})
lilnav.addEventListener('mouseout',function(){
    lilnav.style.display ='none'
})
showbtn.addEventListener('mouseout',function(){
    lilnav.style.display ='none'
})

$(document).ready( function () {
    $('#myDataTable').DataTable();
    var $label = document.querySelector("#myDataTable_length")
    var $filterz = document.querySelector('#myDataTable_filter')
    var $hidepagination = document.querySelector('#myDataTable_paginate')
    var $hideInfo = document.querySelector('#myDataTable_info')
    $hideInfo.style.display='none'
    $hidepagination.style.display='none'
    $filterz.style.display='none'
    $label.style.display ='none'
} );


$(document).ready( function () {
    $('#myDataTable2').DataTable();
    var $label = document.querySelector("#myDataTable2_length")
    var $filterz = document.querySelector('#myDataTable2_filter')
    var $hidepagination = document.querySelector('#myDataTable2_paginate')
    var $hideInfo = document.querySelector('#myDataTable2_info')
    $hideInfo.style.display='none'
    $hidepagination.style.display='none'
    $filterz.style.display='none'
    $label.style.display ='none'
} );
$(document).ready( function () {
    $('#myDataTable3').DataTable();
    var $label = document.querySelector("#myDataTable3_length")
    var $filterz = document.querySelector('#myDataTable3_filter')
    var $hidepagination = document.querySelector('#myDataTable3_paginate')
    var $hideInfo = document.querySelector('#myDataTable3_info')
    $hideInfo.style.display='none'
    $hidepagination.style.display='none'
    $filterz.style.display='none'
    $label.style.display ='none'
} );
