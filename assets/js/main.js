jQuery(window).scroll(function (event) {
    var scroll = jQuery(window).scrollTop();
    if (scroll > 200) {
        jQuery('header').addClass('position-relative');
        jQuery('header').removeClass('position-fixed');
    } else {
        jQuery('header').removeClass('position-relative');
        jQuery('header').addClass('position-fixed');
    }
});

jQuery(document).ready(function() {
    setTimeout(function() {
        jQuery('.modalBtn button').trigger('click');
    }, 3000)

    // var getPath = window.location.pathname.split('/');
    // if (getPath[3] = 'auth-pages') {
    //     jQuery('.headerOption').hide();
    //     jQuery('.authMenu').addClass('col-md-10');

    // }
})


jQuery('.addFeild').click(function () {
    var cloneBox = jQuery(this).parents('.form-group').clone();
    cloneBox.find('.addFeild').remove();
    var getLenght = jQuery('.active .form-group').length;
    if (getLenght < 3) {
        jQuery(this).parents('.step-form').append(cloneBox);
    }

})

const list = Array.from(document.querySelectorAll('.step-form'));
const listLength = list.length;

let active = document.querySelector('.step-form.active');
let step = list.indexOf(active) + 1;


const develop = document.querySelector('.develop')
develop.addEventListener('click', developFlow)


/*---- Develop Flow -----*/
function developFlow() {
    const pyramidGreets = document.querySelector('.parimid-greets')
    const pyramidFlow = document.querySelector('.pyrimid-flow')

    pyramidGreets.style.display = 'none';
    pyramidFlow.style.display = 'block';

    updatePyramid(step)
}


/*---- Proceed Button -----*/
let proceedButton = document.querySelector('.proceedButton');
if (typeof (proceedButton) != 'undefined') {
    proceedButton.addEventListener('click', function () {
        proceedBtn();
    })
}

function proceedBtn() {
    
    if (step < listLength && step >= 1) {
        step = ++step;
        updatePyramid(step);
        console.log(step);
    }

    if(step == listLength) {
        document.querySelector('.submitButton').style.display = 'block'
        document.querySelector('.proceedButton').style.display = 'none'
    } 

    // Else Call Function to Active First Step
}



/*---- Cancel Button -----*/
let cancelButton = document.querySelector('.cancelButton');
if (typeof (cancelButton) != 'undefined') {
    cancelButton.addEventListener('click', function () {
        cancelBtn();
        document.querySelector('.submitButton').style.display = 'none'
    })
}

function cancelBtn() {
    
    if (step <= listLength && step > 1 ) {
        step = --step;
        updatePyramid(step)
        console.log(step);
        document.querySelector('.proceedButton').style.display = 'block'
    } 

}   



    /*---- Update Pyramid -----*/
    function updatePyramid(step) {
        let activeStep = document.querySelector('.active-steps');
        let totalStep = document.querySelector('.total-steps');
        let activeBar = document.querySelector('.activeBar');
        let barWidth = (100 / listLength) * step;

        activeStep.innerText = step;
        totalStep.innerText = listLength;
        activeBar.style.width = `${barWidth}%`;

        active = document.querySelector('.step-form.active');
        active.classList.remove('active');
        list[step - 1].classList.add('active');
    } 


    function submitAction() {
        document.querySelector('.first-payrimid').style.display = 'none';
        document.querySelector('.second-payrimid').style.display = 'block';
        document.querySelector('.pyrimid-flow').style.display = 'none';
        document.querySelector('.parimid-greets-congratulation').style.display = 'block';
    } 
