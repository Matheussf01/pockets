class Cenario{
  
  
  constructor(bg, ground, bushes, sPlane){
    this.position = 0;
    this.bg =bg;
    this.mountains = sPlane;
    this.ground = ground;
    this.bushes = bushes;
    this.groundLine= 3*(height/4);
    let groundRation = this.ground.height/(height/4);
    this.groundW = this.ground.width/groundRation;
    this.groundH = this.ground.height/groundRation;
    this.bushesW = this.bushes.width/groundRation;
    this.bushesH = this.bushes.height/groundRation;
    this.mountainsW = this.mountains.width/groundRation;
    this.mountainsH = this.mountains.height/groundRation;
    this.offset = 0;
    
    
  }
  
  render(){
    noStroke();
    imageMode(CORNER);
    image(this.bg,0,0,width,height);
    
    
    for(let i =0;i<2;i++){ 
       
image(this.mountains,(this.offset*0.05)+(this.mountainsW*i),this.groundLine-this.mountainsH,this.mountainsW,this.mountainsH);
                       }
    for(let i =0;i<3;i++){ 
       
image(this.bushes,(this.offset*0.6)+(this.bushesW*i),height-this.bushesH,this.bushesW,this.bushesH);
                       }
    
    for(let i =0;i<4;i++){ 
       
image(this.ground,this.offset+(this.groundW*i),this.groundLine,this.groundW,this.groundH);
                       }
  
    
    
 for(let i =0;i<4;i++){ 
       
image(this.ground,this.offset+(this.groundW*i),this.groundLine,this.groundW,this.groundH);
                       }
      
  
    
   
  
    //fill(this.bg);
    //rect(0,0,width,height);
    
   // fill(this.secondPlane);
    //rect(0,height/2,width,height/2);
    
    //fill(this.ground);
    //rect(0,this.groundLine,width,this.groundLine/3);
    
    
  }
  move(_val){

    this.offset-=_val;
    if(this.offset>0) this.offset = 0;
    else if(this.offset<-this.groundW*1) this.offset=-this.groundW*1
    
    
    
  }
}