window.onscroll=function () {
	if(document.documentElement.scrollTop > 100){
      document.getElementById('navbar-default').style.transition='all ease-in-out 2s';
		document.getElementById('navbar-default').style.background = 'silver';
		document.getElementById('navbar-default').style.opacity= '1';
		document.getElementById('navbar-default').style.padding= '13px 0 13px 0';
		document.getElementById('logo').style.color= 'white';
	}else{
		document.getElementById('navbar-default').style.background = 'white';
		document.getElementById('navbar-default').style.padding= '0'
		document.getElementById('logo').style.color= 'rgb(230, 196, 49)';
		document.getElementById('navbar-default').style.opacity= '1';
	}	
}
$(document).ready(function(){

	$('#logo').click(function(){
	})
	$form= $('#formInscription');

	$form.submit(function(e){
	 e.preventDefault()

	$.post("../app/index.php",$(this).serializeArray(),function(data){
		$('.alertInscription').css({
			display:'none'
		})
		
	if(data.length===0){
		$('.champ').val("");
		$('.loader').css({
			display:'block'
		})
		setTimeout(function(){
			$('.loader').css({
				display:'none'
			})
			$('.alertInscription').css({
				display:'block'
			})
		},5000)
	}else{
		$('.loader').css({
			display:'none'
		})
	}
      if(data.nomError){
       $('.erreurNom').html(data.nomError);
      }
      else{
        $('.erreurNom').html(" ");
      }
      if(data.prenomError){
    	$('.erreurPrenom').html(data.prenomError);
      }
      else{
	$('.erreurPrenom').html(" ");
      }
      if(data.userError){
    $('.erreurUser').html(data.userError);
    }
    else{
    $('.erreurUser').html(" ");
	}
	if(data.dateError){
	$('.erreurDate').html(data.dateError);
	   }
	else{
	   $('.erreurDate').html(" ");
	   }
	   if(data.societeError){
		$('.erreurSociete').html(data.societeError);
	   }
	else{
	   $('.erreurSociete').html(" ");
	   }
	   if(data.localisationError){
		$('.erreurLocalisation').html(data.localisationError);
	   }
	else{
	   $('.erreurLocalisation').html(" ");
	   }
	   if(data.emailError){
		$('.erreurEmail').html(data.emailError);
	   }
	else{
	   $('.erreurEmail').html(" ");
	   }
	   if(data.passError){
		$('.erreurPass').html(data.passError);
	   }
	else{
	   $('.erreurPass').html(" ");
		}
		if(data.contactError){
			$('.erreurContact').html(data.contactError);
			}
		else{
			$('.erreurContact').html(" ");
			}
	   if(data.passConfError){
		$('.erreurPassConf').html(data.passConfError);
	   }
	else{
	   $('.erreurPassConf').html(" ");
	   }
		},"json")
	})
	$('#connexion').submit(function(e){
		$('.erreurConnection').css({
			display:'none'
		})
		e.preventDefault();
		$.post("../app/login.php",$(this).serializeArray(),function(data){
			if(data.logError){
				$('.erreurLogin').html(data.logError)
			}
			if(data.passLogError){
				$('.erreurPassLog').html(data.passLogError)
			}
			if(data.connectionError){
				$('.erreurConnection').css({
					display:'block'
				})
				$('.erreurConnection').html(data.connectionError)
				$('.champlog').val('')
			}
			if(data.connecte){
			
				$('.champlog').val('')
				$('.loader').css({
					display:'block'
				})
				setTimeout(function(){
					$('.loader').css({
						display:'none'
					})
					location.href="index.php"
				},5000)
			}
		},"json")
	})
		$('.icon-profil').click(function(){
			$('.profilDiv').toggleClass('active')
		})
	$('#logout').submit(function(e){
		e.preventDefault()
		$.post("../app/logout.php",$(this).serializeArray(),function(data){
			location.href="index.php"
		})
	})
	$('.dash').click(function(){
		$('.dashbord').toggleClass('active')
	})
	$('#content').on('click','#article',function(){
		$.post("../app/getArticle.php",$(this).serializeArray(),function(data){
			$('.loader').css({
				display:'block'
			})
			setTimeout(function(){
				$('.loader').css({
					display:'none'
				})
				$('#content').html(data);
			},1000)
		})
	})
	$('#plus').submit(function(e){
		e.preventDefault()
		$.post("../app/plusArticle.php",$(this).serializeArray(),function(data){
			$('.loader').css({
				display:'block'
			})
			setTimeout(function(){
				$('.loader').css({
					display:'none'
				})
				$('#content').html(data);
			},1000)
		})
	})
	$('#voir').submit(function(e){
		e.preventDefault()
		$.post("../app/voirArticle.php",$(this).serializeArray(),function(data){
			$('.content-bar').html(data)
		})
	})
	$('#devis').click(function(){
		$.get('../app/getDevis.php',function(data){
			$('.content-bar').html(data)
		})
})
	$('#add').click(function(){
			$.get('../app/form.php',function(data){
				$('.content-bar').html(data)
			})
	})
	$('#content').on('submit','#form-devis',function(e){
		e.preventDefault()
		$.post("../app/devis.php",$(this).serializeArray(),function(data){
			
			if(data.success){
				$('.loader').css({
					display:'block'
				})
				$('#alert').html('<div style="margin-top:10px;"class="alert alert-info col-md-12">Veuiller patienter ...</div>')
				setTimeout(function(){
					$('.loader').css({
						display:'none'
					})
					setTimeout(function(){
						$('#alert').fadeOut()
					},2000)
					$('#alert').html('<div style="margin-top:10px;"class="alert alert-success col-md-12">'+data.success+'</div>')
				},4000)
			}
		
			if(data.error){
				location.href="login.php";
			}
		},"json")
	})
	
})