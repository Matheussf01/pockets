class Player{
  
  constructor(sprite, ground){
    
    this.sprite = sprite;
    this.size = 40;
    this.ground = ground-this.size/2;
    this.pos = createVector(width/2, this.ground);
    this.vel = createVector(0,0);
    this.acc = createVector(0,0);
    this.grav = 0.4;

    this.screenMargin = 20;
  }
  
  render(){
    
    rectMode(CENTER);
    fill(this.sprite);
    rect(this.pos.x, this.pos.y,this.size);
  }
  
  update(){
    this.vel.y+=this.grav;
    
    this.vel.add(this.acc);
    this.vel.limit(10);
    this.pos.add(this.vel);
    
    if(this.pos.y>this.ground){
      this.pos.y = this.ground;
      
      this.vel.y=0;
    }
    if(this.pos.x>width-this.screenMargin) {
      this.pos.x = width-this.screenMargin;
    }else if(this.pos.x<this.screenMargin){
      this.pos.x = this.screenMargin;
      
    }
    
    
    this.vel.x*=0.9;
     
    
    this.acc = createVector(0,0);

    
  }
  
  move(val){
    
    this.acc.x+=val;
    
  }
  jump(){
    if(this.pos.y==this.ground){
      this.acc.y += -10;
      
      }
  }
  
  
  
  
}