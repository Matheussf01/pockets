let cenario, player;
let isPaused = false;
let block;
let btPause, btUp, btRight, btLeft,btMid;
let bg, ground, montains, ctrl_mid,ctrl_up,ctrl_left,ctrl_right, logo, reset_bt, bushes;
let boxes_img = [];
let sprites = [];
let boxes = [];
let ratio;
let tituloModal = "";
let textoModal = "";
let linkModal = "";
let linkTXTModal = "";
let exibSelect = false;

function preload() {
  
  
  // bg = loadImage('assets/new/bg.png');
  // ground = loadImage('assets/new/chao.png');
  // bushes = loadImage('assets/new/arbustos.png');
  // montains = loadImage('assets/new/montanhas.png');
  bg = loadImage('assets/bg.png');
  ground = loadImage('assets/chao.png');
  bushes = loadImage('assets/arbustos.png');
  montains = loadImage('assets/montanhas.png');
  
  for(let i = 1; i<=4;i++){
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
  btMid= new Button(ctrl_mid, (width/6)*5, (height/8)*7,60,60);
  btUp= new Button(ctrl_up, btMid.pos.x, btMid.pos.y-60,60,60);
  btRight= new Button(ctrl_right, btMid.pos.x+60, btMid.pos.y,60,60);
  btLeft= new Button(ctrl_left, btMid.pos.x-60, btMid.pos.y, 60, 60);
  btReset= new Button(reset_bt, (width/6)*5.5, 75, 60, 60);
  
  let distrib= (cenario.groundW*4)/10.4;
  for(let i = 0; i<=3;i++){
    
    boxes.push(new Interactable(boxes_img[i], distrib*(i+1),height/2, "btn_"+(i+1)));
    
  }
  
  
  
}

function draw() {
  
 
  
  
  cenario.render();
  
  for(let i = 0; i<=3;i++){
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
      }else if(btReset.triggered()){
        funcaoReset();
      }
    
    }

  }


  
  //btPause.render();
  btMid.render();
  btUp.render();
  btRight.render();
  btLeft.render();
  btReset.render();

  
  
  imageMode(CENTER);
  
  image(logo,width/2,(width/3*0.35)/2+50,width/3,width/3*0.35);
  
}


function funcaoReset(){

  window.location.href = "https://pocketsadventure.online/";


}

function mouseReleased(){
    
  if(btPause.triggered()){
    print("toggle pause");
    isPaused = !isPaused;
  }
}

function openModal(nameModal){
  


  switch (nameModal) {
    case 'btn_1':
      tituloModal ="Inscri????o campus em chamas";
      textoModal = "O campus em chamas ?? o nosso treinamento online, ele conta com aulas sobre evangelismo sobrenatural, ideologias pol??ticas, adora????o e MUITO MAIS! Um curso completo para voc?? que quer ver seu campus universit??rio em chamas!";
      linkModal ="https://clkdmg.site/pay/campus-on-fire ";
      linkTXTModal ="Inscreva-se aqui!";
      exibSelect = false;

      break;
    case 'btn_2':
      tituloModal ="Abra seu pockets";
      textoModal = "Est?? preparado para viver dias imersos na presen??a de Deus, sendo capacitado em lideran??a e recebendo ferramentas para ver o seu campus em chamas. Garanta aqui a sua pr??-inscri????o no maior treinamento de miss??es universit??rias que voc??. ";
      linkModal ="https://form.jotform.com/222336122995053";
      linkTXTModal ="Inscreva-se aqui!";
      exibSelect = false;
      break;
    case 'btn_3':
      tituloModal ="Pockets Immersion 2023.1";
      textoModal = "J?? pensou viver o sobrenatural de Deus na sua universidade? Ent??o voc?? precisa abrir um pockets e ser um agente de transforma????o da sua gera????o! ";
      linkModal ="https://dunamismovement.byinti.com/#/event/pre-inscricao-pockets-immersion-2023-66499";
      linkTXTModal ="Inscreva-se aqui!";
      exibSelect = false;
      break;
    case 'btn_4':
      tituloModal ="Ache seu pockets ";
      textoModal = "Quer saber se j?? existe um pockets na sua universidade? Confira aqui todos os pockets espalhados pelo Brasil e pelo mundo. N??s j?? estamos em 11 na????es e em mais de 400 universidades, fa??a parte voc?? tamb??m!  ";
      linkModal ="";
      linkTXTModal ="";
      exibSelect = true;
      break;
    default:
      console.log("erro ao abrir modal");
  }


  var titulo = document.getElementById("modal-title");
  var texto = document.getElementById("texto-modal");
  var linkHref = document.getElementById("link-modal");
  var selectspockets = document.getElementById("selelects-pockets");
  

  titulo.innerHTML = tituloModal;
  texto.innerHTML = textoModal;

  if(exibSelect==true){
    linkHref.classList.remove('show');
    linkHref.classList.add('hide');    

    selectspockets.classList.remove('hide');
    selectspockets.classList.add('show');

  }else{

    selectspockets.classList.add('hide');
    selectspockets.classList.remove('show');

    linkHref.classList.remove('hide');
    linkHref.classList.add('show');
    linkHref.href = linkModal;
    linkHref.innerHTML = linkTXTModal;
  }


  exibSelect = false;
  tituloModal = "";
  textoModal = "";
  linkModal = "";
  linkTXTModal = "";
  isPaused = true;
  $('#exampleModal').modal('show');
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


