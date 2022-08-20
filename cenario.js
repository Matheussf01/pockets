class Cenario{
  
  
  constructor(bg, ground, sPlane){
    this.position = 0;
    this.bg =bg;
    this.secondPlane = sPlane;
    this.ground = ground;
    this.groundLine= 3*(height/4);
    
  }
  
  render(){
    
    rectMode(CORNER);
    
    noStroke();
    
    fill(this.bg);
    rect(0,0,width,height);
    
    fill(this.secondPlane);
    rect(0,height/2,width,height/2);
    
    fill(this.ground);
    rect(0,this.groundLine,width,this.groundLine/3);
    
    
  }
}