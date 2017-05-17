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
}