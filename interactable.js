class Interactable{
  constructor(face,x,y){
    this.face="#0000FF";
    this.pos = createVector(x,y);
    this.size=60;
    this.intersected = false;
    this.coolDown = 0;
    
  }
  
  render(){
    rectMode(CENTER);
    
    if(this.intersected || this.coolDown>0){
      fill("#ffff00");
      
    }else{
      
      fill(this.face);
    }
    
    rect(this.pos.x, this.pos.y, this.size, this.size, 10, 10, 10, 10);
    
  }
  
  intersect(_p){
    
    
    if(this.coolDown<=0 && _p.pos.y-(_p.size/2)< this.pos.y+(this.size/2) && _p.pos.y+(_p.size/2)> this.pos.y-(this.size/2) && _p.pos.x-(_p.size/2)< this.pos.x+(this.size/2) && _p.pos.x+(_p.size/2)> this.pos.x-(this.size/2) ){
      this.intersected = true;
      openModal();
      this.coolDown= 50;
    }else{
      this.intersected = false;
    }
    this.coolDown--;
    
  }
  
}