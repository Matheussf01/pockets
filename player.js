class Player{
  
  constructor(sprite, ground){
    
    this.sprites = sprites;
    this.spriteRatio = 0.78;
    this.size = 40*ratio;
    this.ground = ground-this.size/2;
    this.pos = createVector(width/2, this.ground);
    this.vel = createVector(0,0);
    this.acc = createVector(0,0);
    this.grav = 0.4;
    this.currFrame = 0;

    this.screenMargin = 50;
  }
  
  render(){
    
    imageMode(CENTER);
    
    if(this.pos.y==this.ground && Math.abs(this.vel.x)>=0.05){
     if(frameCount%5==0) this.currFrame= (this.currFrame+1)%3 ;
    }else{
      this.currFrame=0;
    }
    let dir=1;
    if(this.vel.x<0) dir = -1;
    
    push();
    
    scale(dir,1);
    
    image(this.sprites[this.currFrame],this.pos.x*dir, this.pos.y,this.size*this.spriteRatio*dir, this.size);
    pop();
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
      cenario.move(this.pos.x-(width-this.screenMargin));
      this.pos.x = width-this.screenMargin;
    }else if(this.pos.x<this.screenMargin){
      cenario.move(this.pos.x-(this.screenMargin));
      this.pos.x = this.screenMargin;
      
    }
    
    
    this.vel.x*=0.9;
     
    
    this.acc = createVector(0,0);

    
  }
  
  move(val){
    
    this.acc.x+=(val*ratio);
    
  }
  jump(){
    if(this.pos.y==this.ground){
      this.acc.y += (-10*ratio);
      
      }
  }
  
  
  
  
}