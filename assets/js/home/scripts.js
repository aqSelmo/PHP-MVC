((g,u,i)=>{
	if(g(".container-background").length){
		setTimeout(()=>{
			g(".loading").animate({
				opacity : 0
			}, 500, ()=>{
				g(".loading").remove()
			}),
			g(".container-background").animate({
				top : 0,
				height : "100vh",
				easing: "easeinout"
			}, 1000, ()=>{
				setTimeout(()=>{
					g(".container-content").removeClass("d-none"),
					g(".container-content").addClass("d-flex justify-content-center"),
					g(".container-content h1").animate({
						top : "65%",
						opacity: 1
					}, 600)
				}, 500)
			})
		}, 1500)
	}
})($,document,window)