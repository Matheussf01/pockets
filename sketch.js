let cenario, player;
let isPaused = false;
let block;
let btPause, btUp, btRight, btLeft,btMid;
let bg, ground, montains, ctrl_mid,ctrl_up,ctrl_left,ctrl_right, logo, reset_bt, bushes;
let boxes_img = [];
let sprites = [];
let boxes = [];
let ratio;

function preload() {
  
  
  bg = loadImage('assets/bg.png');
  ground = loadImage('assets/chao.png');
  bushes = loadImage('assets/arbustos.png');
  montains = loadImage('assets/montanhas.png');
  
  for(let i = 1; i<=6;i++){
    let img = loadImage('assets/btn'+i+'.png');
    boxes_img.push(img);
    
  }
  
  for(let i = 0; i<=3;i++){
    let img = loadImage('assets/sprite_'+i+'.png');
    sprites.push(img);
    
  }
  
  ctrl_mid = loadImage('assets/ctrl_middle.png');
  ctrl_up = loadImage('assets/ctrl_up.png');
  ctrl_left = loadImage('assets/ctrl_left.png');
  ctrl_right = loadImage('assets/ctrl_right.png');
  logo = loadImage('assets/logo.png');
  reset_bt = loadImage('assets/reset.png');
  
 
}
function setup() {
  createCanvas(1124, 800);
  
  ratio = height/400;
  
  cenario = new Cenario(bg,ground,bushes,montains);
  
  player = new Player(sprites,cenario.groundLine);
  btPause = new Button("#00ff00", 100, 50,120,20);
  btMid= new Button(ctrl_mid, (width/6)*5, (height/8)*7,50,50);
  btUp= new Button(ctrl_up, btMid.pos.x, btMid.pos.y-50,50,50);
  btRight= new Button(ctrl_right, btMid.pos.x+50, btMid.pos.y,50,50);
  btLeft= new Button(ctrl_left, btMid.pos.x-50, btMid.pos.y, 50, 50);
  
  let distrib= (cenario.groundW*4)/10;
  for(let i = 0; i<5;i++){
    
    boxes.push(new Interactable(boxes_img[i], distrib+distrib*(i+1),height/2));
    
  }
  
  
  
}

function draw() {
  
 
  
  
  cenario.render();
  
  for(let i = 0; i<5;i++){
    boxes[i].render();
    boxes[i].intersect(player);
  }
    
  player.update();    
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
    
    
    
    
  }
  
  //btPause.render();
  btMid.render();
  btUp.render();
  btRight.render();
  btLeft.render();
  
  imageMode(CENTER);
  image(logo,width/2,(width/3*0.35)/2+20,width/3,width/3*0.35);
  
}

function mouseReleased(){
    
  if(btPause.triggered()){
    print("toggle pause");
    isPaused = !isPaused;
  }
}

function openModal(){
  isPaused = true;
  $('#exampleModal').modal('show');
  console.log("passou1");
}


var closeBtn = document.getElementById("close");
closeBtn.addEventListener("click", function(event) {
  isPaused = false;
})

var modal = document.getElementById("exampleModal");
modal.addEventListener("click", function(event) {
  isPaused = false;
})

document.onkeydown = function(e) {
  if(e.key === 'Escape') {
    isPaused = false;
  }
}


