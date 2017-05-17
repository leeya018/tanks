
class Tank {

	constructor(posHor, posVer,tankRow) {
		this.posHor = posHor;
		this.posVer = posVer;
		this.fireRate = tankRow["fireRate"];
		this.boundTop = tankConst.boundTop;
		this.boundBottom = tankConst.boundBottom;
		this.boundRight = tankConst.boundRight;
		this.boundLeft = tankConst.boundLeft;
		this.money = 0;
		this.posHorEnd = this.posHor + tankRow["width"];
		this.posVerEnd = this.posVer + tankRow["height"];
		this.lifePoints = tankRow["lifePoints"];
		this.imageUrl = tankRow["image"];
		this.changePosition();
		this.createTankImg();
	}
createTankImg(){
	$("#tank").css('background-image', 'url(' + this.imageUrl + ')');
}
	changePosition(){
		$("#tank").css({"left": this.posHor+"px"});
		$("#tank").css({"bottom": this.posVer+"px"});
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
//ifCrush - can be a tank or a bullet
ifCrush(tankOther){
	if(this.posHor >= tankOther.posHor && this.posHor <= tankOther.posHorEnd
		||this.posVer >= tankOther.posVer && this.posVer <= tankOther.posVerEnd
		||this.posHorEnd >= tankOther.posHor && this.posHorEnd <= tankOther.posHorEnd
		||this.posVerEnd >= tankOther.posVer && this.posVerEnd <= tankOther.posVerEnd){
		return true;
}
return false;
}

hit(tankOther){
	if(ifCrush(tankOther)){
		this.lifePoints -= tankConst.hitPoints;
		if(this.gameOver()){
			alert("GAME OVER");
		}
	}
}
gameOver(){
	return this.lifePoints === 0;
}
}//end class

