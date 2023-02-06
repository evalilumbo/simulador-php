
			$(document).ready(function() {
				$('#tabela1').DataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
					}
				} );
			} );		
			$(document).ready(function() {
				$('#tabela2').DataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
					}
				} );
			} );		
			$(document).ready(function() {
				$('#tabela3').DataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
					}
				} );
			} );		
			$(document).ready(function() {
				$('#tabela4').DataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
					}
				} );
			} );		
			$(document).ready(function() {
				$('#tabela5').DataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
					}
				} );
			} );		
			$(document).ready(function() {
				$('#tabela6').DataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
					}
				} );
			} );		
			$(document).ready(function() {
				$('#tabela7').DataTable( {
					"language": {
						"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
					}
				} );
			} );
			(function(){
			$("#y").on("change", function(e){
				var x = $("#x").val()
				var y = $("#y").val()
			  if(y.replace(/[^\d]+/g,'') > (x.replace(/[^\d]+/g,'')*90)/100){
				$(this).val(((x.replace(/[^\d]+/g,'')*9)/1000).toLocaleString('pt-BR', {
			  minimumFractionDigits: 2,
			  maximumFractionDigits: 2
			}));
				alert("O valor do financiamento não pode ser maior que 90%!")
			  }
			})
			}())
			
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var panel = this.nextElementSibling;
				if (panel.style.display === "block") {
				  panel.style.display = "none";
				} else {
				  panel.style.display = "block";
				}
			  });
			}
			
			 
			var btn = document.getElementById('btn-div');
			var mostre = document.querySelector('.mostre');
			btn.addEventListener('click', function() {
				
			  if(mostre.style.display === 'block') {
				  mostre.style.display = 'none';
			  } else {
				  mostre.style.display = 'block';
			  }
			});
			
			var btn = document.getElementById('btn-div1');
			var mostre1 = document.querySelector('.mostre1');
			btn.addEventListener('click', function() {
				
			  if(mostre1.style.display === 'block') {
				  mostre1.style.display = 'none';
			  } else {
				  mostre1.style.display = 'block';
			  }
			});
			
			var btn = document.getElementById('btn-div2');
			var mostre2 = document.querySelector('.mostre2');
			btn.addEventListener('click', function() {
				
			  if(mostre2.style.display === 'block') {
				  mostre2.style.display = 'none';
			  } else {
				  mostre2.style.display = 'block';
			  }
			});
			
			var btn = document.getElementById('btn-div3');
			var mostre3 = document.querySelector('.mostre3');
			btn.addEventListener('click', function() {
				
			  if(mostre3.style.display === 'block') {
				  mostre3.style.display = 'none';
			  } else {
				  mostre3.style.display = 'block';
			  }
			});
			
			var btn = document.getElementById('btn-div4');
			var mostre4 = document.querySelector('.mostre4');
			btn.addEventListener('click', function() {
				
			  if(mostre4.style.display === 'block') {
				  mostre4.style.display = 'none';
			  } else {
				  mostre4.style.display = 'block';
			  }
			});
			
			var btn = document.getElementById('btn-div5');
			var mostre5 = document.querySelector('.mostre5');
			btn.addEventListener('click', function() {
				
			  if(mostre5.style.display === 'block') {
				  mostre5.style.display = 'none';
			  } else {
				  mostre5.style.display = 'block';
			  }
			});
			
			var btn = document.getElementById('btn-div6');
			var mostre6 = document.querySelector('.mostre6');
			btn.addEventListener('click', function() {
				
			  if(mostre6.style.display === 'block') {
				  mostre6.style.display = 'none';
			  } else {
				  mostre6.style.display = 'block';
			  }
			});
			
		