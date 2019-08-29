$(document).ready(function(){
	var cont1=0;
	var cont2=0;
	var cont3=0;
	var cont4=0;

	$(".artigo-1").click(function(){//artigo 1
		if(cont1==0){
			cont1++;
			$(".conte-1").slideToggle("slow");
			$(".flecha1").addClass("rotate");
			$(".flecha1").removeClass("rotate2");
		}else if(cont1==1){
			$(".conte-1").slideToggle("slow");
			$(".flecha1").addClass("rotate2");
			$(".flecha1").removeClass("rotate");
			cont1=0;
		}
	});
	$(".artigo-2").click(function(){//artigo 2
		if(cont2==0){
			cont2++;
			$(".conte-2").slideToggle("slow");
			$(".flecha2").addClass("rotate");
			$(".flecha2").removeClass("rotate2");
		}else if(cont2==1){
			$(".conte-2").slideToggle("slow");
			$(".flecha2").addClass("rotate2");
			$(".flecha2").removeClass("rotate");
			cont2=0;
		}
	});
	$(".artigo-3").click(function(){//artigo 3
		if(cont3==0){
			cont3++;
			$(".conte-3").slideToggle("slow");
			$(".flecha3").addClass("rotate");
			$(".flecha3").removeClass("rotate2");
		}else if(cont3==1){
			$(".conte-3").slideToggle("slow");
			$(".flecha3").addClass("rotate2");
			$(".flecha3").removeClass("rotate");
			cont3=0;
		}
	});
	$(".artigo-4").click(function(){//artigo 3
		if(cont4==0){
			cont4++;
			$(".conte-4").slideToggle("slow");
			$(".flecha4").addClass("rotate");
			$(".flecha4").removeClass("rotate2");
		}else if(cont4==1){
			$(".conte-4").slideToggle("slow");
			$(".flecha4").addClass("rotate2");
			$(".flecha4").removeClass("rotate");
			cont4=0;
		}
	});
});