
class Tank {

	constructor(posHor, posVer,tankLevel) {
		this.tankLevel = tankLevel;
		this.posHor = posHor;
		this.posVer = posVer;
		this.boundTop = boundTop;
		this.boundBottom = boundBottom;
		this.boundRight = boundRight;
		this.boundLeft = boundLeft;
		this.money = 0;
		this.posHorEnd = this.posHor + width;
		this.posVerEnd = this.posVer + height;

	}

	
	right(meter){
		if(this.posHor + meter <= this.boundRight ){
			this.posHor += meter;
			this.posHorEnd += meter;				
		}
		$("#tank").css({"left": this.posHor+"px"});
	}
	left(meter){
		if(this.posHor - meter >= this.boundLeft ){
			this.posHor -= meter;
			this.posHorEnd -= meter;				

		}
		$("#tank").css({"left": this.posHor+"px"});
	}

	up(meter){
		if(this.posVer + meter <= this.boundTop ){
			this.posVer += meter;				
			this.posVerEnd += meter;	
		}
		$("#tank").css({"bottom": this.posVer+"px"});
	}
	down(meter){
		if(this.posVer - meter >= this.boundBottom ){
			this.posVer -= meter;		
			this.posVerEnd -= meter;			
		}
		$("#tank").css({"bottom": this.posVer+"px"});
	}

	
	start(){
// this.left(30);
var self = this;
$(document).keydown(self,function(e) {	
	// alert("self");
	switch(e.which) {

        case 37: // left
        self.left(30);
        break;
          case 38: // up
          self.up(30);
          break;
          case 39: // right
          self.right(30);
          break;
          case 40: // down
          self.down(30);
          break;

          default: return;
      }
  });
}

getPosition(){
	console.log("bounds  :" + this.posHor + " , "+this.posVer + " , "+this.posHorEnd + " , "+this.posVerEnd+"<br>");
}
ifCrush(tankOther){
if(this.posHor >= tankOther.posHor && this.posHor <= tankOther.posHorEnd
	||this.posVer >= tankOther.posVer && this.posVer <= tankOther.posVerEnd
	||this.posHorEnd >= tankOther.posHor && this.posHorEnd <= tankOther.posHorEnd
	||this.posVerEnd >= tankOther.posVer && this.posVerEnd <= tankOther.posVerEnd){
	return true;
}
return false;
}
}//end class

