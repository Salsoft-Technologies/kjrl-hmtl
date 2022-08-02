jQuery(window).scroll(function(event) {
    var scroll = jQuery(window).scrollTop();
    if (scroll > 200) {
        jQuery('header').addClass('position-relative');
        jQuery('header').removeClass('position-fixed');
    } else {
        jQuery('header').removeClass('position-relative');
        jQuery('header').addClass('position-fixed');
    }
});


jQuery('#addFeild').click(function(){
    var cloneBox = jQuery(this).parents('.form-group').clone();
      cloneBox.find('#addFeild').remove();
      var getLenght = jQuery('.active .form-group').length;
      if(getLenght < 3) {
        jQuery(this).parents('.step-form').append(cloneBox);
      }
     
})


function activeTab () {
    const list = [...document.querySelectorAll('.step-form')];
    document.querySelector('.total-steps').innerText = list.length;
    const widthFind = 100 / list.length;
    document.querySelector('.activeBar').style.width = widthFind +'%';
    const active = document.querySelector('.step-form.active');
    const result =  list.indexOf(active) + 1;
    document.querySelector('.active-steps').innerText = result;
}



jQuery('#develop').click(function(){
    jQuery('.parimid-greets').hide();
    jQuery('.pyrimid-flow').show();
    activeTab ();
});

function procedBtn() {
    const active = document.querySelectorAll('.step-form.active');
    active.forEach((item) => {
        item.classList.remove('active');
    });
    active.indexOf(active) -1
}
