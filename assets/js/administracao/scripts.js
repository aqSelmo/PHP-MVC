(function(g,u,i){
	i.menuCollapse = ()=>{
		if(g('.menu-active').length) {
			g('.nav-menu').animate({
				marginLeft : '-220px'
			}, 500),
			g('.nav-menu').removeClass('menu-active')
		} else {
			g('.nav-menu').animate({
				marginLeft : '0'
			}, 500),
			g('.nav-menu').addClass('menu-active');
		}
	}
	if(g('#chartBar').length){
		var Bar = document.getElementById('chartBar').getContext('2d');
		var chart = new Chart(Bar, {
			type: 'bar',
			data: {
				labels: ['Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
				datasets: [{
					label: 'Visitas',
					backgroundColor: 'rgb(255, 99, 132)',
					borderColor: 'rgb(255, 99, 132)',
					data: [2, 3, 5, 2, 20, 30, 45]
				}]
			}
		});
	}
	if(g('#chartPolar').length){
		var PolarArea = document.getElementById('chartPolar').getContext('2d');
		var chart = new Chart(PolarArea, {
			type: 'polarArea',
			data: {
				labels: ['Outubro', 'Novembro', 'Dezembro'],
				datasets: [{
					label: 'Visitas',
					backgroundColor: ['rgb(255, 0, 0)', 'rgb(0, 255, 0)', 'rgb(0, 0, 255)'],
					data: [20, 30, 45]
				}]
			}
		});
	}
	window.passwordVerify = (pass1, pass2)=>{
		let a = $('[name="'+pass1+'"]').val();
		let b = $('[name="'+pass2+'"]').val();
		
		if(a != b){
			$('[name="'+pass2+'"]').removeClass('border-secondary'),
			$('[name="'+pass2+'"]').addClass('border-danger')
		} else{
			$('[name="'+pass2+'"]').removeClass('border-danger'),
			$('[name="'+pass2+'"]').addClass('border-success')
		}
		
	}
	if($('[type=file]').length){
		$('[type=file]').fileselect({
			browseBtnClass: 'btn bg-1 rounded-0 text-light',
			language : "br"
		})
	}
})($,document,window)