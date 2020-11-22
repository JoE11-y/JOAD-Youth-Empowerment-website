  // Adding click functionality to signup buttons and close function to the signup popup
  //document.getElementById('signup').addEventListener('click',
  //function() {
	//document.querySelector('.bg-modal').style.display = 'flex';
  //});
  //document.querySelector('.close').addEventListener('click',
  //function() {
	//document.querySelector('.bg-modal').style.display = 'none';
  //});

  var modBtn = document.querySelector('.modal-btn');
  var modBtn2 = document.querySelector('.modal-btn2');
  var modalBg = document.querySelector('.bg-modal');
  var modalClose = document.querySelector('.close');


  modBtn.addEventListener('click', function(){
    modalBg.classList.add('bg-modal-active')
  });
  
  modBtn2.addEventListener('click', function(){
    modalBg.classList.add('bg-modal-active')
  });

  modalClose.addEventListener('click', function(){
    modalBg.classList.remove('bg-modal-active')
  });
