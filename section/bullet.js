class Bullet{

	constructor(posHor, posVer,weaponRow){
		this.posHor = posHor;
		this.posVer = posVer;
		this.damage = weaponRow["damage"];
		this.imageUrl = weaponRow["image"];
		this.width = weaponRow["width"];
		this.height = weaponRow["height"];
		this.changePosition();
		this.createImg();
	}
	createImg(){
		$("#bullet").css('background-image', 'url(' + this.imageUrl + ')');
	}
	changePosition(){
		$("#bullet").css({"left": this.posHor+"px"});
		$("#bullet").css({"bottom": this.posVer+"px"});
	}

	start(){
		var changePosition = changePosition;
		var self = this;
		var intervalId = setInterval(this.startBullet,10,5,self);

	}

	startBullet(meter,self){
		if(self.posHor > 1290)
		{

			clearInterval(this.intervalId);
		}else{
			self.posHor += meter;
			self.changePosition();
		}
	}

}