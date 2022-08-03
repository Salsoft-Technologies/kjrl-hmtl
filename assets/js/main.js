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


function activeTab(steps) {
    const list = [...document.querySelectorAll('.step-form')];
    document.querySelector('.total-steps').innerText = list.length;
    let widthFind = (100 / list.length) * steps;
    document.querySelector('.activeBar').style.width = widthFind +'%';
    const active = document.querySelector('.step-form.active');
    const result =  list.indexOf(active) + 1;
    document.querySelector('.active-steps').innerText = result;
}



jQuery('#develop').click(function(){
    jQuery('.parimid-greets').hide();
    jQuery('.pyrimid-flow').show();
    activeTab(1);
});

function procedBtn() {
    let list = [...document.querySelectorAll('.step-form')];
    const totalLength = list.length;
    let active = document.querySelector('.step-form.active');
    let steps = list.indexOf(active);
    if(steps <= totalLength) {
        active.classList.remove('active')
        steps = ++steps;
        console.log(steps);
        active = list[steps];
        active.classList.add('active');
        activeTab(steps);
    }
}
