class Interactable{
  constructor(face,x,y,name){
    this.face=face;
    this.pos = createVector(x,y);
    this.size=60*ratio;
    this.intersected = false;
    this.coolDown = 0;
    this.state=0;
    this.name=name;
    
  }
  
  render(){
    imageMode(CENTER);
    
    if(this.intersected || this.coolDown>0){
      this.state=1;
      
    }else{
      
      this.state=0;
    }
    
    image(this.face, this.pos.x+cenario.offset, this.pos.y, this.size, this.size, (this.face.width/2)*this.state, 0, this.face.width/2, this.face.height);
   
    
  }
  
  intersect(_p){
    
    
    if(this.coolDown<=0 && _p.pos.y-(_p.size/2)< this.pos.y+(this.size/2) && _p.pos.y+(_p.size/2)> this.pos.y-(this.size/2) && _p.pos.x-(_p.size/2)< this.pos.x+(this.size/2)+cenario.offset && _p.pos.x+(_p.size/2)> this.pos.x-(this.size/2)+cenario.offset ){
      this.intersected = true;
      openModal(this.name);
      this.coolDown= 50;
    }else{
      this.intersected = false;
    }
    this.coolDown--;
    
  }
  
}