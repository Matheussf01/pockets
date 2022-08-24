class Button{
  constructor(_img, _x, _y,_w,_h){
    
    this.img = _img;
    this.pos = createVector(_x,_y);
    this.w = _w;
    this.h = _h;
  }
  render(){
    imageMode(CENTER);
    
   
    image(this.img,this.pos.x, this.pos.y,this.w,this.h);
    
  }
  
  triggered(){
    
    return (mouseX > this.pos.x-this.w/2 && mouseX < this.pos.x+this.w/2 && mouseY > this.pos.y-this.h/2 && mouseY < this.pos.y+this.h/2);
  }
  
  
}