<!DOCTYPE html><html lang="en"><head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="p5.js"></script>
    <script src="p5.sound.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <style>
      html, body {
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-image: url("assets/bg-back.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
    </style>
  </head>
  <body>
    <div class="canva">
      <main>
      </main>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal-title"></h5>
            <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
              <img src="assets/fechar.png" alt="">
            </button>
          </div>
          <div class="modal-body" id="modal-body">
            <div class="texto-modal" id="texto-modal"></div>
            <a class="link-modal" target="_blank" id="link-modal" href="#"></a>
            
            <div id="selelects-pockets">
       
              <select id="pais" name="pais">
                <option value=""  selected>Pais...</option>
                <option value="Brasil">Brasil</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Peru">Peru</option>
                <option value="Argentina">Argentina</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Chile">Chile</option>
                <option value="Estados Unidos">Estados Unidos</option>
              </select>
         
              <select id="estado" name="estado">
                <option value="Acre" class="Brasil">Acre</option>
                <option value="Amazonas" class="Brasil">Amazonas</option>
                <option value="Bahia" class="Brasil">Bahia</option>
                <option value="BuenosAires" class="Argentina">Buenos Aires</option>
                <option value="CiciruIllinois" class="Estados Unidos">Ciciru, Illinois </option>
                <option value="CiudaddelEste" class="Paraguay">Ciudad del Este</option>
                <option value="EspiritoSanto" class="Brasil">Esp??rito Santo</option>
                <option value="Goias" class="Brasil">Goi??s</option>
                <option value="Lima" class="Peru">Lima</option>
                <option value="CiLivoniaMichigan" class="Estados Unidos">Livonia, Michigan </option>
                <option value="MatoGrosso" class="Brasil">Mato Grosso</option>
                <option value="MatoGrossodoSul" class="Brasil">Mato Grosso do Sul</option>
                <option value="MinasGerais" class="Brasil">Minas Gerais</option>
                <option value="NewYorkNewYork" class="Estados Unidos"> New York, New York</option>
                <option value="Para" class="Brasil">Par??</option>
                <option value="Paraiba" class="Brasil">Para??ba</option>
                <option value="Parana" class="Brasil">Paran??</option>
                <option value="Pernambuco" class="Brasil">Pernambuco</option>
                <option value="Piaui" class="Brasil">Piau??</option>
                <option value="PresidenteFranco" class="Paraguay">Presidente Franco</option>
                <option value="Quito" class="Ecuador">Quito</option>
                <option value="RiodeJaneiro" class="Brasil">Rio de Janeiro</option>
                <option value="RioGrandedoNorte" class="Brasil">Rio Grande do Norte</option>
                <option value="RioGrandedoSul" class="Brasil">Rio Grande do Sul</option>
                <option value="SantaCatarina" class="Brasil">Santa Catarina</option>
                <option value="SantaFe-Rosario" class="Argentina">Santa F??- Ros??rio</option>
                <option value="Santiago" class="Chile">Santiago</option>
                <option value="SaoPaulo" class="Brasil">S??o Paulo</option>
                <option value="Sergipe" class="Brasil">Sergipe</option>
                <option value="Tocantins" class="Brasil">Tocantins</option>
              </select>
              
           
              <select id="univ" name="univ">
                <option value="CentrodasFaculdadesAssociadasdeEnsino" class="SaoPaulo">Centro das Faculdades Associadas de Ensino </option>
                <option value="CentroEducacionaldeEnsinoSuperiordoAmazonas" class="Amazonas">Centro Educacional de Ensino Superior do Amazonas </option>
                <option value="CentroFederaldeEducacaoTecnologicaCelsoSuckowdaFonseca" class="RiodeJaneiro">Centro Federal de Educa????o Tecnol??gica Celso Suckow da Fonseca</option>
                <option value="CentrouniversitarioarmandoAlvarespenteado-FAAP" class="SaoPaulo">Centro universit??rio armando ??lvares penteado - FAAP</option>
                <option value="Centrouniversitarioavantis" class="SantaCatarina">Centro universit??rio avantis</option>
                <option value="CentroUniversitarioBaraodeMaua" class="SaoPaulo">Centro Universit??rio Bar??o de Mau?? </option>
                <option value="CentroUniversitarioBrasileiroUNIBRA" class="Pernambuco">Centro Universit??rio Brasileiro UNIBRA</option>
                <option value="CentroUniversitarioBrazCubas" class="SaoPaulo">Centro Universit??rio Braz Cubas</option>
                <option value="CentrouniversitariodasAmericas" class="SaoPaulo">Centro universit??rio das Am??ricas </option>
                <option value="Centrouniversitariodaserragaucha" class="RioGrandedoSul">Centro universit??rio da serra ga??cha </option>
                <option value="CentroUniversitariodeBeloHorizonte" class="MinasGerais">Centro Universit??rio de Belo Horizonte</option>
                <option value="CentrouniversitariodeJoaopessoa" class="Paraiba">Centro universit??rio de Jo??o pessoa </option>
                <option value="CentrouniversitariodeValenca" class="RiodeJaneiro">Centro universit??rio de Valen??a </option>
                <option value="CentroUniversitariodeVarzeaGrande" class="MatoGrosso">Centro Universit??rio de V??rzea Grande</option>
                <option value="CentroUniversitariodoEspiritoSanto" class="EspiritoSanto">Centro Universit??rio do Esp??rito Santo </option>
                <option value="CentrouniversitarioFaculdadeGuanambi" class="Bahia">Centro universit??rio Faculdade Guanambi </option>
                <option value="CentroUniversitarioFundacaoAssisGurgacz" class="Parana">Centro Universit??rio Funda????o Assis Gurgacz </option>
                <option value="CentroUniversitarioInga" class="Parana">Centro Universit??rio Ing?? </option>
                <option value="Centrouniversitarioluteranodepalmas" class="Tocantins">Centro universit??rio luterano de palmas </option>
                <option value="CentroUniversitarioRitterdosReis" class="RioGrandedoSul">Centro Universit??rio Ritter dos Reis</option>
                <option value="CentrouniversitarioSantanna" class="SaoPaulo">Centro universit??rio Santanna </option>
                <option value="Centrouniversitariosudoestepaulista" class="SaoPaulo">Centro universit??rio sudoeste paulista </option>
                <option value="CentroUniversitarioUnigranCapital" class="MatoGrossodoSul">Centro Universit??rio Unigran Capital </option>
                <option value="CentroUniversitarioUverse" class="Acre">Centro Universit??rio Uverse</option>
                <option value="ColumbiaUniversity" class="NewYorkNewYork"> Columbia University</option>
                <option value="Esamc" class="SaoPaulo">Esamc</option>
                <option value="EscoladeDireito-UniversidadedoEstadodoAmazonasUEA-ED" class="Amazonas">Escola de Direito - Universidade do Estado do Amazonas UEA- ED</option>
                <option value="ESPM" class="SaoPaulo">ESPM</option>
                <option value="EstaciodeSa" class="RiodeJaneiro">Est??cio de Sa</option>
                <option value="FaculdadedecienciasagrariaseexatasdePrimaveradoLeste(UNIC)" class="MatoGrosso">Faculdade de ci??ncias agr??rias e exatas de Primavera do Leste (UNIC)</option>
                <option value="FaculdadedecienciasmedicasdesaoJosedoscampos" class="SaoPaulo">Faculdade de ci??ncias m??dicas de s??o Jos?? dos campos</option>
                <option value="FaculdadedeEducacaodaUniversidadedeSaoPaulo" class="SaoPaulo">Faculdade de Educa????o da Universidade de S??o Paulo </option>
                <option value="FaculdadedeEngenhariaseArquitetura" class="Parana">Faculdade de Engenharias e Arquitetura</option>
                <option value="FaculdadedeMedicinadaUniversidadedeSaoPaulo" class="SaoPaulo">Faculdade de Medicina da Universidade de S??o Paulo </option>
                <option value="FaculdadedeMedicinadeCampos" class="RiodeJaneiro">Faculdade de Medicina de Campos </option>
                <option value="Faculdadedemedicinadepetropolis" class="RiodeJaneiro">Faculdade de medicina de petr??polis </option>
                <option value="FaculdadedeTecnologiadeSaoPaulo-FatecCotia" class="SaoPaulo">Faculdade de Tecnologia de S??o Paulo - Fatec Cotia</option>
                <option value="Faculdademetropolitanasunidas" class="SaoPaulo">Faculdade metropolitanas unidas </option>
                <option value="FaculdadesMetropolitanasUnidas" class="SaoPaulo"> Faculdades Metropolitanas Unidas</option>
                <option value="Fef" class="SaoPaulo">Fef</option>
                <option value="InstitutoFederaldeSantaCatarina-CampusArarangua" class="SantaCatarina">Instituto Federal de Santa Catarina - Campus Ararangu??</option>
                <option value="MadonnaUniversity" class="CiLivoniaMichigan">Madonna University</option>
                <option value="MODULO-CARAGUATATUBA" class="SaoPaulo">M??DULO - CARAGUATATUBA </option>
                <option value="MortonCollege" class="CiciruIllinois">Morton College </option>
                <option value="PontificiaUniversidadeCatolica" class="MinasGerais">Pontif??cia Universidade Cat??lica </option>
                <option value="PontificiaUniversidadeCatolica" class="Parana">Pontif??cia Universidade Cat??lica </option>
                <option value="PontificiaUniversidadeCatolica" class="SaoPaulo">Pontif??cia Universidade Cat??lica </option>
                <option value="Pucminas" class="MinasGerais">Puc minas </option>
                <option value="RedesdeEnsinoDoctum" class="MinasGerais">Redes de Ensino Doctum</option>
                <option value="UEPA-UniversidadedoEstadodoPara-Reitoria" class="Para">UEPA - Universidade do Estado do Par?? - Reitoria</option>
                <option value="Unifev-CentroUniversitariodeVotuporanga" class="SaoPaulo">Unifev - Centro Universit??rio de Votuporanga</option>
                <option value="UNIFTC" class="Bahia">UNIFTC</option>
                <option value="UNIGRAN-CentroUniversitariodaGrandeDourados" class="MatoGrossodoSul">UNIGRAN - Centro Universit??rio da Grande Dourados </option>
                <option value="Univel" class="Parana">Univel</option>
                <option value="UniversidadeAnhembiMorumbi" class="SaoPaulo">Universidade Anhembi Morumbi</option>
                <option value="UniversidadeAnhembiMorumbiMooca" class="SaoPaulo">Universidade Anhembi Morumbi Mooca</option>
                <option value="UniversidadeBrasil" class="SaoPaulo">Universidade Brasil</option>
                <option value="UniversidadeCatolicadeSantos" class="SaoPaulo">Universidade Cat??lica de Santos </option>
                <option value="UniversidadeCatolicaDomBosco" class="MatoGrossodoSul">Universidade Cat??lica Dom Bosco </option>
                <option value="UniversidadecatolicadoSalvador" class="Bahia">Universidade cat??lica do Salvador </option>
                <option value="UniversidadeCidadeSaoPaulo" class="SaoPaulo">Universidade Cidade S??o Paulo</option>
                <option value="UniversidadeCruzeirodoSul" class="SaoPaulo">Universidade Cruzeiro do Sul</option>
                <option value="UniversidadedePernambuco" class="Pernambuco">Universidade de Pernambuco </option>
                <option value="UniversidadedeSaoPaulo" class="SaoPaulo">Universidade de S??o Paulo</option>
                <option value="UniversidadedoEstadodoAmazonas" class="Amazonas">Universidade do Estado do Amazonas</option>
                <option value="UniversidadedoEstadodoRiodeJaneiro" class="RiodeJaneiro">Universidade do Estado do Rio de Janeiro </option>
                <option value="UniversidadedoRiodeJaneiro" class="RiodeJaneiro">Universidade do Rio de Janeiro </option>
                <option value="UniversidadeEstaciodeSa" class="RiodeJaneiro">Universidade Est??cio de S??</option>
                <option value="UniversidadeestadualdeCampinas" class="SaoPaulo">Universidade estadual de Campinas </option>
                <option value="UniversidadeEstadualdeLondrina" class="Parana">Universidade Estadual de Londrina </option>
                <option value="UniversidadeEstadualdeMatoGrossodoSul" class="MatoGrossodoSul">Universidade Estadual de Mato Grosso do Sul</option>
                <option value="UNIVERSIDADEESTADUALDOAMAZONAS" class="Amazonas">UNIVERSIDADE ESTADUAL DO AMAZONAS</option>
                <option value="UNIVERSIDADEESTADUALDOPIAUI" class="Piaui">UNIVERSIDADE ESTADUAL DO PIAUI </option>
                <option value="UniversidadeestadualdosudoestedaBahia" class="Bahia">Universidade estadual do sudoeste da Bahia</option>
                <option value="UniversidadeestadualpaulistaJuliodeMesquitaFilho" class="SaoPaulo">Universidade estadual paulista J??lio de Mesquita Filho</option>
                <option value="UniversidadefederaldaBahia" class="Bahia">Universidade federal da Bahia </option>
                <option value="UniversidadeFederaldaGrandeDourados" class="MatoGrossodoSul">Universidade Federal da Grande Dourados</option>
                <option value="UniversidadeFederaldeJuizdeFora" class="MinasGerais">Universidade Federal de Juiz de Fora</option>
                <option value="UniversidadeFederaldeLavras" class="MinasGerais">Universidade Federal de Lavras</option>
                <option value="UniversidadeFederaldeMatoGrossodoSul" class="MatoGrossodoSul">Universidade Federal de Mato Grosso do Sul</option>
                <option value="UniversidadeFederaldeMinasGerais" class="MinasGerais">Universidade Federal de Minas Gerais</option>
                <option value="UniversidadeFederaldePernambuco-UFPE" class="Pernambuco">Universidade Federal de Pernambuco- UFPE</option>
                <option value="UniversidadefederaldeSaoPaulo" class="SaoPaulo">Universidade federal de S??o Paulo </option>
                <option value="UniversidadeFederaldeSaoPaulo" class="SaoPaulo">Universidade Federal de S??o Paulo</option>
                <option value="UniversidadeFederaldeSergipe" class="Sergipe">Universidade Federal de Sergipe</option>
                <option value="UniversidadeFederaldoPampa" class="RioGrandedoSul">Universidade Federal do Pampa</option>
                <option value="UniversidadeFederaldoPara" class="Para">Universidade Federal do Par?? </option>
                <option value="UniversidadeFederaldoRiodeJaneiro" class="RiodeJaneiro">Universidade Federal do Rio de Janeiro</option>
                <option value="UniversidadeFederaldoRioGrandedoSul" class="RioGrandedoSul">Universidade Federal do Rio Grande do Sul</option>
                <option value="UniversidadeFederaldoTocantins" class="Tocantins">Universidade Federal do Tocantins </option>
                <option value="UniversidadeFederaldoTrianguloMineiro" class="MinasGerais">Universidade Federal do Tri??ngulo Mineiro</option>
                <option value="UniversidadeFederalFluminense" class="RiodeJaneiro">Universidade Federal Fluminense</option>
                <option value="UniversidadeFederalRuraldoRiodeJaneiro" class="RiodeJaneiro">Universidade Federal Rural do Rio de Janeiro</option>
                <option value="UniversidadeFederalRuraldoSemi-Arido" class="RioGrandedoNorte">Universidade Federal Rural do Semi-??rido </option>
                <option value="UniversidadeFeevale" class="RioGrandedoSul">Universidade Feevale</option>
                <option value="UniversidadeFiladelfiaLondrina" class="Parana">Universidade Filad??lfia Londrina </option>
                <option value="UniversidadeLuteranadoBrasil" class="RioGrandedoSul">Universidade Luterana do Brasil</option>
                <option value="UniversidadeNovedeJulho" class="SaoPaulo">Universidade Nove de Julho </option>
                <option value="UniversidadePaulista-UNIP" class="SaoPaulo">Universidade Paulista - UNIP</option>
                <option value="UniversidadePaulista" class="Amazonas">Universidade Paulista </option>
                <option value="UniversidadePaulista" class="SaoPaulo">Universidade Paulista</option>
                <option value="UniversidadePitagorasUnopar" class="Parana">Universidade Pit??goras Unopar </option>
                <option value="UniversidadePotiguar" class="RioGrandedoNorte">Universidade Potiguar</option>
                <option value="UniversidadePresbiterianaMackenzie" class="SaoPaulo">Universidade Presbiteriana Mackenzie</option>
                <option value="UniversidadePrivadadelEste" class="Parana">Universidade Privada del Este</option>
                <option value="UniversidadePUC-Rio" class="RiodeJaneiro">Universidade PUC-Rio</option>
                <option value="UniversidadeSalgadodeOliveira" class="Goias">Universidade Salgado de Oliveira</option>
                <option value="UniversidadeSalvador" class="Bahia">Universidade Salvador</option>
                <option value="UniversidadeSantoAmaro" class="SaoPaulo">Universidade Santo Amaro</option>
                <option value="UniversidadeSaoJudasTadeu" class="SaoPaulo">Universidade S??o Judas Tadeu </option>
                <option value="UniversidadeTecnologicaFederaldoParana" class="Parana">Universidade Tecnol??gica Federal do Paran??</option>
                <option value="UniversidadeVeigadeAlmeida" class="RiodeJaneiro">Universidade Veiga de Almeida </option>
                <option value="UniversidadUPAP" class="CiudaddelEste"> Universidad UPAP</option>
                <option value="UniversitariafederaldeMatoGrosso" class="MatoGrosso">Universit??ria federal de Mato Grosso </option>
                <option value="Universitarioluteranadobrasil" class="RioGrandedoSul">Universit??rio luterana do brasil</option>
                
              </select>

              <ul id="lider" name="lider">
                <li class="UniversidadeSantoAmaro">Albert  Roque <span>@alb_roque</span></li>
                <li class="UniversidadePaulista-UNIP">Amanda  Medeiros de Mello <span>@amandaaah.mello</span></li>
                <li class="UniversidadeSalvador">Amanda  Santiago Carmo  <span>@amandassanttiago</span></li>
                <li class="UniversidadeFederaldoTocantins">Ana Beatriz Rodrigues Assun????o  <span>@anabrassuncao </span></li>
                <li class="UniversidadeVeigadeAlmeida">Ana Beatriz  Coelho Costa  <span>@anabeatriz_c0sta</span></li>
                <li class="UniversidadeFederaldeLavras">Ana Cecilia de Lima Moura <span>@_anacecilia_lm</span></li>
                <li class="CentroUniversitarioBaraodeMaua">Ana Lu??sa  da Silva  <span>@anasilva_lu</span></li>
                <li class="UniversidadeNovedeJulho">Ana Paula Silva  <span>@anasillva_a</span></li>
                <li class="UniversidadeSalvador">Ana Paula  Viana Martins <span>@martinsvpaula</span></li>
                <li class="UNIVERSIDADEESTADUALDOPIAUI">Ana Victoria  Moura Melo <span>@victoriamelo.consultora</span></li>
                <li class="UniversidadedoRiodeJaneiro">Andressa Teixeira <span>@andressa_tsc</span></li>
                <li class="EstaciodeSa">Andressa  Figueiredo  <span>@andressacmf</span></li>
                <li class="UniversidadeEstadualdeLondrina">Andreza  Manzato Cavichioli  <span>@andrezam.cavichioli</span></li>
                <li class="UNIFTC">Anne Caroline de Souza Mascate Santos <span>@annemascate</span></li>
                <li class="UniversidadeFederaldeMinasGerais">??quila  Lopes <span>@aquilalopes77</span></li>
                <li class="UniversidadeVeigadeAlmeida">Beatriz  Gonzo <span>@bia.gonzo</span></li>
                <li class="UniversidadeestadualpaulistaJuliodeMesquitaFilho">Beatriz  Rezende Santos <span>@bia_rezendes</span></li>
                <li class="CentroUniversitarioBrazCubas">Bianca De Oliveira Faria  <span>@biancadeoli</span></li>
                <li class="UniversidadeSaoJudasTadeu">Bianca  Carvalho  <span>@biancarvalhs </span></li>
                <li class="Univel">Brenda  Barbosa  <span>@hello.brrenda</span></li>
                <li class="CentroUniversitarioRitterdosReis">Bruna Hickmann Paz <span>@brunahickmann_</span></li>
                <li class="UniversidadeFederalFluminense">Bruna  Medeiros Ramos  <span>@brunamramoss</span></li>
                <li class="UniversidadePitagorasUnopar">Bruna  Machado de Oliveira  <span>@bruninha.mo</span></li>
                <li class="UniversidadeEstadualdeMatoGrossodoSul">Bruna Mayra Carvalho Vaz da Mata <span>@brumayra.vaz</span></li>
                <li class="UniversidadeNovedeJulho">Bruna Paes do  Patrocinio  <span>@Bpaesp</span></li>
                <li class="Centrouniversitarioavantis">Brunna Let??cia Viana Santiago Silva  Viana <span>@brunnaleticia_</span></li>
                <li class="UniversidadeTecnologicaFederaldoParana">Camila Malafaia <span>@cami.gabe</span></li>
                <li class="UniversidadeestadualdeLondrina">Carlos Eduardo  Campos Brunelli  <span>@carlos.brunelli</span></li>
                <li class="ESPM">Danton Louren??o <span>@Danton.lou</span></li>
                <li class="UniversidadeNovedeJulho">Dayane  Marques <span>@daywesley_</span></li>
                <li class="FaculdadedeTecnologiadeSaoPaulo-FatecCotia">Eduarda Lima Araujo <span>@araududa</span></li>
                <li class="UniversidadeFederalRuraldoSemi-Arido">Eduarda  M??lo <span>@eduarda_mirelle</span></li>
                <li class="Unifev-CentroUniversitariodeVotuporanga">erica Clemente da Silva <span>@erica.clemente</span></li>
                <li class="CentroUniversitarioUverse">??xilei Costa <span>@exileicosta</span></li>
                <li class="UniversidadedeSaoPaulo">Felipe Rodrigues Sandes <span>@fe.sandes</span></li>
                <li class="PontificiaUniversidadeCatolica">Gabriel  Alves  <span>@ga_alves04</span></li>
                <li class="UniversidadeBrasil">Gabriela Arsenio Ferreira <span>@gabysarsenio</span></li>
                <li class="FaculdadedecienciasagrariaseexatasdePrimaveradoLeste(UNIC)">Gabriela  Ara??jo Gon??alves de Souza  <span>@araujogs16</span></li>
                <li class="CentroUniversitarioInga">Gabrieli Vitoria  Delmenico da Silva  <span>@gabi_delmenico </span></li>
                <li class="UniversidadeSaoJudasTadeu">Gabriella  Mesquita politani  <span>@gabriellamesquita._</span></li>
                <li class="CentroUniversitariodeVarzeaGrande">Gabrielle Koshiama <span>@gabikoshiama</span></li>
                <li class="CentroUniversitarioUnigranCapital">Gabrielle  Dantas de Souza  <span>@gabsdantas_</span></li>
                <li class="UniversidadePaulista">Gabrielle  Teixeira Costa  <span>@teixeira.gabrielle </span></li>
                <li class="UniversidadeFederalFluminense">Georgia  Narciso <span>@georgia_narciso</span></li>
                <li class="UniversidadeFiladelfiaLondrina">Giovana Menotti Trainotti  <span>@giovanamenotti </span></li>
                <li class="FaculdadedeMedicinadaUniversidadedeSaoPaulo">Giovana  Ferreira Takacs <span>@giovanatakacs</span></li>
                <li class="UniversidadedePernambuco">Giovanna  Arruda Magalh??es  <span>@giomags</span></li>
                <li class="UniversidadePaulista">Giulia Guirardelli dos Santos <span>@giu_guirardelli</span></li>
                <li class="UniversidadeAnhembiMorumbi">Gustavo Lopes de Paula <span>@iamgustavolopes</span></li>
                <li class="UniversidadeFederaldeMatoGrossodoSul">Gustavo Felipe  Gon??alves Reis <span>@gustavoreis.png</span></li>
                <li class="UniversidadeAnhembiMorumbiMooca">Henrique  Tadeu Rodrigues de Souza <span>@tadeuh_</span></li>
                <li class="CentrouniversitariodeJoaopessoa">Humberto  Mateus  <span>@Humbertomateus35</span></li>
                <li class="Fef">Isabela  Rossi <span>@isabelarossi___</span></li>
                <li class="UniversidadeFederaldoTrianguloMineiro">Isabella Souza <span>@isabellad.souza</span></li>
                <li class="UniversidadeFederaldaGrandeDourados">Isabelli  Santos da Silva  <span>@_isabellisantos</span></li>
                <li class="UniversidadeFederaldoPara">Israel Luz <span>@israchristian</span></li>
                <li class="FaculdadedeEducacaodaUniversidadedeSaoPaulo">Jaqueline  Ara??jo da Silva  <span>@jajaquearaujo</span></li>
                <li class="CentroEducacionaldeEnsinoSuperiordoAmazonas">Jaqueline  Melo <span>@jaqueemello</span></li>
                <li class="UniversidadedeSaoPaulo">Jemima Carvalho de Ara??jo <span>@jemimacarvalho_</span></li>
                <li class="UniversidadeFederaldoRiodeJaneiro">J??ssica  Cristina Gon??alves  <span>@jessicacristina.15</span></li>
                <li class="CentrouniversitarioarmandoAlvarespenteado-FAAP">Jo??o Pedro Hudson <span>@joaopedrohudson</span></li>
                <li class="CentrouniversitariodasAmericas">Julia  ramos dos santos <span>@Ju.ramoss</span></li>
                <li class="PontificiaUniversidadeCatolica">J??lia  Rodrigues <span>@J??lia_rds</span></li>
                <li class="UniversidadePaulista-UNIP">J??lia  Alves Bernardes <span>@julia_alves_bernardes</span></li>
                <li class="UniversidadeFederaldoRiodeJaneiro">Kamila Soares Dos Anjos Cordovil <span>@mylaasoares</span></li>
                <li class="FaculdadedeMedicinadeCampos">Karen  Schumacker <span>@karensbrust</span></li>
                <li class="UniversidadeCidadeSaoPaulo">Karina Ab de Oliveira <span>@eusouaab</span></li>
                <li class="CentrouniversitariodeValenca">Keren Neves <span>@kerendasneves</span></li>
                <li class="UniversidadedeSaoPaulo">Larissa Fernanda  Gomes da Silva <span>@larifernandagomes_</span></li>
                <li class="UEPA-UniversidadedoEstadodoPara-Reitoria">Larissa Thais dos Reis Fran??a <span>@larissathaisfranca_</span></li>
                <li class="UniversidadePotiguar">Layla  Veneiz <span>@laylavez</span></li>
                <li class="UniversidadeFederaldePernambuco-UFPE">Lays Cristhine  Santos Barbosa  <span>@lays.cristhine</span></li>
                <li class="UniversidadeFeevale">Leonardo Mendon??a <span>@leo_pmendonca</span></li>
                <li class="UniversitariafederaldeMatoGrosso">Lethycia  Fernandes  <span>@lethycia_99</span></li>
                <li class="UniversidadedeSaoPaulo">Leticia  Torres <span>@lehyep</span></li>
                <li class="UniversidadePresbiterianaMackenzie">Let??cia  Gusm??o Oliveira  <span>@_leticiagusmao</span></li>
                <li class="UniversidadeVeigadeAlmeida">Linda Catarina Delenn Alves Yang <span>@catarina_yang</span></li>
                <li class="UniversidadeEstadualdeLondrina">Lorena Caroline  de Lima Lopes  <span>@lorenacaroline_</span></li>
                <li class="UniversidadeFederaldoRioGrandedoSul">Louise  Noskoski Venites <span>@louisenoskoski</span></li>
                <li class="CentrodasFaculdadesAssociadasdeEnsino">Lucas Marangon <span>@lucasmarangonn</span></li>
                <li class="UniversidadeNovedeJulho">Lucas  Pinho <span>@Lucaspinho12</span></li>
                <li class="UniversidadeestadualpaulistaJuliodeMesquitaFilho">Luciana  Pereira Giagniorio  <span>@lucianagiagniorio</span></li>
                <li class="CentrouniversitarioSantanna">Luis Claudio Lima Cerqueira Filho  <span>@Luisclaudio97</span></li>
                <li class="Centrouniversitariodaserragaucha">Luis Gustavo  Dos santos rodrigues  <span>@Luisgustavosr_</span></li>
                <li class="Esamc">Luiz Felipe Amaral Vitali <span>@Felipevitali_</span></li>
                <li class="UniversidadeFederaldeJuizdeFora">Lylian Tereza Alves <span>@lyl_alves</span></li>
                <li class="UniversidadeNovedeJulho">Maikon  Jhonata Carvalho Santos <span>@maikon_jcsantos</span></li>
                <li class="CentroUniversitarioBrasileiroUNIBRA">Manuelle  Belo <span>@Manuellecbelo</span></li>
                <li class="UniversidadePotiguar">Maria Paula da Silva Almeida <span>@ma_paullaa</span></li>
                <li class="UniversidadeTecnologicaFederaldoParana">Maria Augusta Sim??es Sanchez Oliveira <span>@insta.guta</span></li>
                <li class="UniversidadeFederaldoTrianguloMineiro">Maria Eduarda  Guimar??es da Costa <span>@duda_dacosta</span></li>
                <li class="CentroUniversitarioFundacaoAssisGurgacz">Maria Fernanda  Buzzachera Araujo  <span>@mah.fbuzz</span></li>
                <li class="FaculdadesMetropolitanasUnidas">Mariana Ferreira <span>@_marifpedroso</span></li>
                <li class="UniversidadefederaldaBahia">Mariana  Oliveira da Silva  <span>@maari_oliveira</span></li>
                <li class="Faculdadedemedicinadepetropolis">Mariana  da Silva Porto <span>@portosilvamari</span></li>
                <li class="UniversidadeestadualpaulistaJuliodeMesquitaFilho">Mariana  Santana Sass <span>@marianavieira.s</span></li>
                <li class="UniversidadedoEstadodoAmazonas">Mariele Lima da Silva <span>@eumarielelima</span></li>
                <li class="InstitutoFederaldeSantaCatarina-CampusArarangua">Mateus  Teixeira <span>@mateusteixeiramtm</span></li>
                <li class="UniversidadeCruzeirodoSul">Matheus  Silva Santos <span>@Matheus_silvah98</span></li>
                <li class="PontificiaUniversidadeCatolica">Matheus Duarte Aguiar Madeira <span>@matheus_dam7</span></li>
                <li class="UniversidadeSaoJudasTadeu">Matheus Carneiro Cardoso <span>@Maat_cardoso</span></li>
                <li class="UNIVERSIDADEESTADUALDOAMAZONAS">Miguel Cezar Silva Magalh??es <span>@miguelcezarsm</span></li>
                <li class="UniversidadedeSaoPaulo">Mileide  Santos Barbosa <span>@mileide.s_barbosa</span></li>
                <li class="FaculdadedecienciasmedicasdesaoJosedoscampos">Milena Peres Ribeiro <span>@milenaperes</span></li>
                <li class="UniversidadeFederaldoRiodeJaneiro">Milena Smider <span>@milenasmider</span></li>
                <li class="UniversidadeFederaldoRiodeJaneiro">Milena  Valente  <span>@miihvalente</span></li>
                <li class="UniversidadePrivadadelEste">Milena  Nowotarski <span>@mihnowotarski</span></li>
                <li class="UniversidadecatolicadoSalvador">Monick  Oliveira  <span>@Monickevilly </span></li>
                <li class="UniversidadedoEstadodoRiodeJaneiro">Monique  Mairins  <span>@moniquemairins</span></li>
                <li class="PontificiaUniversidadeCatolica">Murilo  Gherbali Locatelli  <span>@mu_locatelli</span></li>
                <li class="UniversidadeVeigadeAlmeida">Mylena Maria  Martins de Oliveira Lopes  <span>@mylenammartins</span></li>
                <li class="UniversidadeFederaldeSaoPaulo">Natalia  Alencar de Sales Benedito <span>@nathy_alencar</span></li>
                <li class="Faculdademetropolitanasunidas">Nat??lia  Pereira  <span>@eunaat</span></li>
                <li class="UniversidadePUC-Rio">Nath??lia  Gouveia <span>@natt_gouveia</span></li>
                <li class="CentroFederaldeEducacaoTecnologicaCelsoSuckowdaFonseca">Nicole  Cristina Vieira dos Santos <span>@sntsnick</span></li>
                <li class="UniversidadefederaldeSaoPaulo">Nicoli  Alves pizorusso  <span>@nicolipizorusso</span></li>
                <li class="UniversidadeCatolicadeSantos">Nicolle Cabral Alves  <span>@Nicollecabrall</span></li>
                <li class="Centrouniversitariosudoestepaulista">Nicoly  Santos  <span>@nicoly.ssantos</span></li>
                <li class="UniversidadeFederalRuraldoRiodeJaneiro">Noemi  Nunes Paschoal <span>@noemipaschoal_</span></li>
                <li class="PontificiaUniversidadeCatolica">Nycole Soares <span>@Nyc.soares</span></li>
                <li class="FaculdadedeEngenhariaseArquitetura">Patricia Dutra de Lima <span>@arqpatriciadutra</span></li>
                <li class="PontificiaUniversidadeCatolica">Pedro von Borell Souza Pratis <span>@pedrovonb</span></li>
                <li class="UniversidadePresbiterianaMackenzie">Pedro  Martins Nascimento <span>@pedro.martinsn</span></li>
                <li class="UniversidadeFederaldeSergipe">Pedro Cleverton Santos <span>@pedroclevertonn</span></li>
                <li class="UniversidadeFederaldoPampa">RAFAELA VIEIRA DORNELES <span>@rafaeladorneles</span></li>
                <li class="UniversidadePaulista">Raniele  Sousa Viana  <span>@rannysousa__ </span></li>
                <li class="UniversidadeCatolicaDomBosco">Raphaela Dantas  <span>@raphinhadantas</span></li>
                <li class="UniversidadeEstaciodeSa">Raquel Costa <span>@raquell.costaa_</span></li>
                <li class="UniversidadePaulista">Raquel Rosa  <span>@unip.marques.pockets</span></li>
                <li class="UniversidadeEstaciodeSa">Renan dos Santos <span>@renan.santosc</span></li>
                <li class="UniversidadeLuteranadoBrasil">Roberta  Dias da Silveira <span>@silveiraroberta16</span></li>
                <li class="EscoladeDireito-UniversidadedoEstadodoAmazonasUEA-ED">Sabrina Paula Abreu  Gomes  <span>@sabpaula_</span></li>
                <li class="UniversidadeestadualdosudoestedaBahia">Samara Pires Leal <span>@samisl1</span></li>
                <li class="PontificiaUniversidadeCatolica">Sara  Aguiar  <span>@cris_sarita </span></li>
                <li class="MODULO-CARAGUATATUBA">Sarah  Abigail  <span>@sarahlucenadias</span></li>
                <li class="">Stephany  Yoshimoto  <span>@stepyoshimoto</span></li>
                <li class="CentroUniversitariodeBeloHorizonte">Sthefany Patrielle <span>sthefanypatrielle@gmail.com</span></li>
                <li class="CentroUniversitariodoEspiritoSanto">Su??len  Maier <span>@suelen_maier</span></li>
                <li class="UniversidadeSalgadodeOliveira">Symilla  Lino de Oliveira <span>@symillalino</span></li>
                <li class="Universitarioluteranadobrasil">Ta??s  Ventura <span>@taissventura</span></li>
                <li class="UniversidadeCruzeirodoSul">Talita  Lemos <span>@taligoesl</span></li>
                <li class="RedesdeEnsinoDoctum">Thalis Barezi <span>@thalisbarezi</span></li>
                <li class="UniversidadeFederalFluminense">Thamires Alves Dias <span>@tthamiresdias</span></li>
                <li class="UniversidadeestadualdeCampinas">Vinicius Ryu Agata <span>@viniciusagata</span></li>
                <li class="UNIGRAN-CentroUniversitariodaGrandeDourados">Vit??ria Moraes Bonito Silva <span>@vivi_bonito</span></li>
                <li class="UniversidadefederalFluminense">Vit??ria Torres <span>@vitoriadtorres</span></li>
                <li class="Centrouniversitarioluteranodepalmas">Vitt??ria  Horner Nogueira  <span>@euhorner</span></li>
                <li class="UniversidadeEstadualdeCampinas">Viviane  Lourenco  <span>@vivi_slourenco</span></li>
                <li class="CentrouniversitarioFaculdadeGuanambi">Zaira  Ant??nia Lima Santana  <span>@zaira_santana.eng</span></li>
                <li class="Quito">Ana Julia Viteri <span>@pockets_cumbaya</span></li>
                <li class="Lima">Cesar brayan Cotrina caurino <span>@pocketsupnw</span></li>
                <li class="Quito">Julio Proa??o <span>@pockets_puce</span></li>
                <li class="SantaFe-Rosario">Kataryne Lorrane Costa Dos Santos <span>@pocketsunr</span></li>
                <li class="CiudaddelEste">Kleyton Samuel <span>@pocketsucp</span></li>
                <li class="BuenosAires">Lannara Campos <span>@pocketsbarcelo</span></li>
                <li class="BuenosAires">Mariana Leal <span>@pockets.fmed</span></li>
                <li class="CiudaddelEste">Mickelen Ribeiro <span>@pocketsuninter</span></li>
                <li class="PresidenteFranco">Milena Nowotarski <span>@pocketsupefranco</span></li>
                <li class="CiudaddelEste">??scar Manuel Bravo ??lvarez <span>@pocketsupecde</span></li>
                <li class="Lima">Piero Polo <span>@pocketsusil</span></li>
                <li class="Santiago">Sofia Lavarello <span>@pocketspuc</span></li>
                <li class="UniversidadUPAP">Ana Ferreira <span>@pocketsupap</span></li>
                <li class="MadonnaUniversity">Ramon  Rocha <span>@ramonluis09</span></li>
                <li class="MortonCollege">Jo??o Rosito <span>@jvrosito</span></li>
                <li class="ColumbiaUniversity">Thiago Lee <span>@thiago_lee</span></li>
                
              </ul>

            </div>

          </div>
          
        </div>
      </div>
    </div>


    <script src="sketch.js"></script>
    <script src="cenario.js"></script>
    <script src="interactable.js"></script>
    <script src="player.js"></script>
    <script src="button.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
<script>
  jQuery(function(){
  var optionsestado = $('#estado option');
  var estado = $('#estado').empty();
  var optionsUniv = $('#univ option');
  var univ = $('#univ').empty();
  var optionsLider = $('#lider li');
  optionsLider.css("display", "none");


  $('#pais').on('change', function() {
      
      estado.css("display", "initial");
      univ = $('#univ').empty();
      optionsLider.css("display", "none");

      var classe = this.value;

      var opts = optionsestado.filter(function() {
        return $(this).hasClass(classe)
      });
    
      estado.html('').append(opts);
      estado.append( "<option  value='' selected>Estado...</option>");
      


     
  });

 

  $('#estado').on('change', function() {
      var classe = this.value;

      if(classe == "Lima" || classe=="Quito" || classe=="SantaFe-Rosario" || classe=="CiudaddelEste" || classe=="BuenosAires" || classe=="PresidenteFranco" || classe=="CiLivoniaMichigan" || classe=="CiciruIllinois" || classe=="CiciruIllinois"){
        
        estado.css("display", "none");
        
        optionsLider.css("display", "none");
        optionsLider.each(function(){

          if($(this).hasClass(classe) > 0){
            $(this).css("display", "initial");
          }

        });

      }else{
        var opts = optionsUniv.filter(function() {
            return $(this).hasClass(classe)
        });
      }
      //console.log(opts);

      univ.html('').append(opts);
      univ.append( "<option value='' selected>Universidade...</option>");
  });



  //var lider = $('#lider').empty();

  $('#univ').on('change', function() {

      var texto = $(this).val();

      optionsLider.css("display", "none");

      optionsLider.each(function(){
        console.log($(this).hasClass(texto));
        console.log(texto);
        if($(this).hasClass(texto) > 0){
          $(this).css("display", "initial");
        }
      });

  });


  });
</script>

</body></html>