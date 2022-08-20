let cenario, player;
let isPaused = false;
let block;
let btPause, btUp, btRight, btLeft;
function setup() {
  createCanvas(800, 400);
  
  cenario = new Cenario(110,220,180);
  
  player = new Player("#ff0000",cenario.groundLine);
  block = new Interactable("#0000ff", (width/5)*3,height/2);
  btPause = new Button("#00ff00", 100, 50,120,20);
  btUp= new Button("#00ff00", (width/6)*5, (height/6)*5-55,50,50);
  btRight= new Button("#00ff00", (width/6)*5+30, (height/6)*5,50,50);
  btLeft= new Button("#00ff00", (width/6)*5-30, (height/6)*5, 50, 50);
}

function draw() {
  
 
  
  
  cenario.render();
  
  block.render();
  player.render();
  if(!isPaused){
    if(keyIsDown(RIGHT_ARROW))player.move(0.5);
    if(keyIsDown(LEFT_ARROW))player.move(-0.5);
    if(keyIsDown(UP_ARROW))player.jump();
    
    if(mouseIsPressed){
 
     if(btRight.triggered()){
        player.move(0.5);
      }else if(btLeft.triggered()){
        player.move(-0.5);
      }else if(btUp.triggered()){ 
        player.jump();
      }
    
    }
    
    player.update();  
    block.intersect(player);
    
  }else{
    fill(0,150);
    rect(width/2,height/2,width,height);
    
  }
  
  btPause.render();
  btUp.render();
  btRight.render();
  btLeft.render();
  
  
  
}

function mouseReleased(){
    
  if(btPause.triggered()){
    print("toggle pause");
    isPaused = !isPaused;
  }
}
function openModal(){
  //isPaused = true;
  
  //código para abrir o modal vem aqui
  print("ABRINDO MODAL");
  
}

