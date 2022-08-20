class Button{
  constructor(_img, _x, _y,_w,_h){
    
    this.img = _img;
    this.pos = createVector(_x,_y);
    this.w = _w;
    this.h = _h;
  }
  render(){
    rectMode(CENTER);
    
    fill("#00ff00");
    rect(this.pos.x, this.pos.y,this.w,this.h,10,10,10,10);
    
  }
  
  triggered(){
    
    return (mouseX > this.pos.x-this.w/2 && mouseX < this.pos.x+this.w/2 && mouseY > this.pos.y-this.h/2 && mouseY < this.pos.y+this.h/2);
  }
  
  
}