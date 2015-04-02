
    var pixels=new Array();
    var canv=$('canv');
    var ctx=canv.getContext('2d');
    var wordCanv=$('wordCanv');
    var wordCtx=wordCanv.getContext('2d');
    var mx=-1;
    var my=-1;
    var words="";
    var txt=new Array();
    var cw=document.body.clientWidth;
    var ch=1090;
    var resolution=1;
    var n=0;
    var timerRunning=false;
    var resHalfFloor=0;
    var resHalfCeil=0;
    canv.width=cw;
      canv.height=ch;
      wordCanv.width=cw;
      wordCanv.height=ch;
      

    
    function canv_mousemove(evt)
    {
    function ElementPosition(param){
var x=0, y=0;
var obj = (typeof param == "string") ? document.getElementById(param) : param;
if (obj) {
x = obj.offsetLeft;
y = obj.offsetTop;
var body = document.getElementsByTagName('body')[0];
while (obj.offsetParent && obj!=body){
x += obj.offsetParent.offsetLeft;
y += obj.offsetParent.offsetTop;
obj = obj.offsetParent;
}
}
this.x = x;
this.y = y;
}

var divPos = new ElementPosition("wordParticle"); //you may passed the div id or the div object reference itself

      mx=evt.clientX-canv.offsetLeft-divPos.x;
      my=evt.clientY-canv.offsetTop-divPos.y;
    }
    
    function Pixel(homeX,homeY)
    {
      this.homeX=homeX;
      this.homeY=homeY;
      
      this.x=Math.random()*cw;
      this.y=Math.random()*ch;
      
      //tmp
      this.xVelocity=Math.random()*10-5;
      this.yVelocity=Math.random()*10-5;
    }
    Pixel.prototype.move=function()
    {
      var homeDX=this.homeX-this.x;
      var homeDY=this.homeY-this.y;
      var homeDistance=Math.sqrt(Math.pow(homeDX,2) + Math.pow(homeDY,2));
      var homeForce=homeDistance*0.01;//+Math.random(1);
      var homeAngle=Math.atan2(homeDY,homeDX);
      
      var cursorForce=0;
      var cursorAngle=0;
      
      if(mx >= 0)
      {
        var cursorDX=this.x-mx;
        var cursorDY=this.y-my;
        var cursorDistanceSquared=Math.pow(cursorDX,2) + Math.pow(cursorDY,2);
        cursorForce=Math.min(10000/cursorDistanceSquared,10000);
        cursorAngle=Math.atan2(cursorDY,cursorDX);
      }
      else
      {
        cursorForce=0;
        cursorAngle=0;
      }
      
      this.xVelocity+=homeForce*Math.cos(homeAngle) + cursorForce*Math.cos(cursorAngle);
      this.yVelocity+=homeForce*Math.sin(homeAngle) + cursorForce*Math.sin(cursorAngle);
      
      this.xVelocity*=0.92;
      this.yVelocity*=0.92;
      
      this.x+=this.xVelocity;
      this.y+=this.yVelocity;
       
    }
  
    function $(id)
    {
      return document.getElementById(id);
    }
    
    function timer()
    {
      if(!timerRunning)
      {
        timerRunning=true;
        setTimeout(timer,33);
        for(var i=0;i<pixels.length;i++)
        {
          pixels[i].move();
        }
        
        drawPixels();
        
     
        n++;
        if(n%10==0 && (cw!=document.body.clientWidth)) body_resize();
        timerRunning=false;
      }
      else
      {
        setTimeout(timer,10);
      }
    }
    
    function drawPixels()
    {
      var imageData=ctx.createImageData(cw,ch);
      var actualData=imageData.data;
    
      var index;
      var goodX;
      var goodY;
      var realX;
      var realY;
      
      for(var i=0;i<pixels.length;i++)
      {
        goodX=Math.floor(pixels[i].x);
        goodY=Math.floor(pixels[i].y);
        
        for(realX=goodX-resHalfFloor; realX<=goodX+resHalfCeil && realX>=0 && realX<cw;realX++)
        {
          for(realY=goodY-resHalfFloor; realY<=goodY+resHalfCeil && realY>=0 && realY<ch;realY++)
          {
            index=(realY*imageData.width + realX)*4;
            actualData[index+3]=255;
          }
        }
      }
      
      imageData.data=actualData;
      ctx.putImageData(imageData,0,0);
      
    }
    
    function readWords()
    {
      words='梁帅龙 Liang Shuailong 一

这是一篇萦怀于心而又一直不敢动笔的文章。是心中绷得太紧以至于怕轻轻一抚就砉然断裂的弦丝。却又恍若巨石在喉，耿耿于无数个不眠之夜，在黑暗中撕心裂肺，似乎祇须默默一念，便足以砸碎我寄命尘世这一点点虚妄的自足。

又是江南飞霜的时节了，秋水生凉，寒气渐沉。整整10年了，身寄北国的我仍是不敢重回那一段冰冷的水域，不敢也不欲去想像我投江失踪的母亲，至今仍暴尸于哪一片月光下……

二

从母亲到晚年仍保持的决绝个性里，我相信她成为"右派"是一件必然的事。这样说并非基于纯粹的宿命观，而是指她诞生之初，血质里就被刻上了她父亲的烙印。她一生都在努力企图剪断她与那个"国军"将领的血缘联系，却终归徒劳无获。

我外祖母是江汉平原的大家闺秀，其父在民初留学扶桑8年，归国赴任甘肃省高法院长前，决定与天门望族刘家结为姻亲——那时的刘家三少爷（我外祖父）正成为黄埔八期的士官生开始了他的戎马生涯。在可能存在过的短暂幸福之后，作为战祸频仍年代的军人之妻，外祖母便带着我的母亲步入了她的孤独一生。

抗战爆发，外祖父侍卫蒋公撤退西南。刘家太爷故世，大宅日见雕敝。该地区又是日寇国军和共军拉锯争夺之地，无论哪一部短暂占领，徒具虚名的刘宅便成了搜刮粮饷的目标。外祖母带着我少年的母亲东躲西藏，饱受乱离之苦。最后因怕女儿受辱，外婆祇好托乡里客商将我母亲带到湘西伯父家避祸。母亲在那识尽炎凉，像一个女仆般做工求学。

三

日本投降当年，母亲独自踏上还乡寻母的艰难路程，当她找到捡棉花纺线度日的外婆时，劫后重逢的泪水湿透了她们的褴褛衣裳。次年，乡人传言外祖父衣锦还乡，授衔少将驻节武汉。母亲来到省城寻父，等待她的却是晴天霹雳——外祖父不信他的妻女还能侥幸存活，已经重新娶妻生子了。而且他隐瞒了婚史因此不敢相认。

悲愤的母亲闯进了他父亲的一场盛大酒会，一时舆论大哗，外祖父回乡逼迫外婆离婚，从此父女反目，我母亲坚决改名换姓以示恩断义绝。

天道往还，1948年，节节败退的外祖父奉命移师恩施，赴任途中被伏击，流弹洞穿了他壮年的胸脯——而最后为他扶柩理丧的竟是我终身寡居的外婆。

武汉次年易帜，"革大"招生，母亲投考，结业后竟又鬼使神差地被分往恩施剿匪土改——踏上了她父亲送命的路程。在这条充满险恶的山路上，她与我父亲邂逅相逢。一个平原遗弃的将门孤女，一个山中破落的土司遗孑，在那个伟大动荡的时代，偶然而又必然的结合了并从此扎根深山。

四

外婆早已原谅了她的丈夫，母亲却永远在仇恨她的父亲。她无法在现实中去惩罚他，便极力在精神上去满足一种虚构的报复——改名换姓，不承认有此父亲，甚至不允许外婆去原谅。

然而这种背叛祇能停留在自我泄愤的地步，因为这个政党一向在意个人的血统以研究其阶级属性。在她报考革命大学那天起，她就要面对无数张表格。她总是试图说明她是她父亲那个阶级的弃婴，她和她母亲属于苦难平民。然而表格却限制了她的声辩，同时还作为一张早有预谋的标签贴上了她的面庞。

上个世纪流行一个充满杀机的词叫"历史不清"，母亲被这个语词压迫得痛不欲生。当任何一个批判她的人诘问——你是不是军阀女儿，她就仿佛陷入一个悖论。她比别人还恨她的父亲，却又偏被他们视为同一个敌人。她觉得这个父亲不仅在生前遗弃了她，还在死后长久地陷害着她，她完全无力跳出这一血缘的魔沼。

1957年的母亲正当而立之年，这个来自遥远省城的女人，试图把她的教养植入那个土家山寨。其直率和刚烈却往往好心换来敌意，她对党的意见和她的出身被联系一起时，祇能戴上右派的高帽接受工人的监督改造。20年后终于彻底平反时，母亲已老去，所有曾经蒙受的屈辱和伤害不知向谁讨还。划处和平反都是一张纸，她深感前者重如泰山而后者却轻于鸿毛。

五

文革开始时，父亲作为矿长很快被打倒，母亲微薄的工资要维持全家的生活，那时她是小镇供销社可以双手打算盘的会计。外婆陪着失学的大姐重返平原插队务农，二姐当了矿工，父亲病危在武汉住院，10岁的我也肺结核穿孔而命若悬丝，我们家一分四处进入了生命中最艰危的岁月。攻击母亲的大字报依旧贴满门窗，频繁的抄家连缝纫机头也被拎走，母亲带着我忍辱负重地在小镇访医求药，她不能垮，她要拉扯着这个破碎的家一个不少地走进那渺茫的明天。

一次她带我到县城看病，回来时求熟人找了个便车，司机走出城后竟威逼我们从车厢下来，一生不低头的母亲为了我哀婉乞求，她看着扬尘而去的汽车悲愤难耐，又不愿让儿子看到一个母亲的窘迫和尴尬，祇好将泪水默默吞下。她永远不理解人世间的恶竟至如此，人性何以被一个时代扭曲得如此不堪。

我小学毕业后，学校又以我有传染病为由不录我上初中，我开始了短暂的少年樵夫岁月。当我在夕阳下挑着柴火蹒跚而归时，多能远远看见下班后又来接我的母亲，那时她已见憔悴了，乱发在风中飘飞，有谁曾知她的高贵？两个姐姐都已失学，她再不能让我沉沦泥涂，她不得不去求文教站站长，终于使我得以入学。

六

母亲终于带着全家迎来了1978年。父亲升迁，她获平反，大姐招工，我考上大学，外婆又回到我们身边。这时的母亲总算有了笑颜，她相信善良总有好报。即使那些迫害过他们的人也来我家走动，她依旧不假辞色。

1983年外婆辞世，85年父母离休，87年父亲患癌，89年我辞去警职，随后入狱，母亲又开始了她的忧患余生。父亲总想等到儿子重见天日，因此而不得不承受每年动一至二次手术的巨大痛苦。他身上的器官被一点点割去，祇有那求生的意志仍在顽强茁生。真正苦的更是母亲，她不断拖着她的衰朽残年，陪父亲去省城求医。父亲在病床上辗转，60多岁的母亲却在病床下铺一张席子陪护着艰难的日日夜夜。祇要稍能走动，母亲就要扶着父亲来探监，三人每每在铁门话别的悲惨画面，连狱警往往也感动含泪。每一次挥手仿佛就是永诀，两个为共和国效命一生的佝偻老人，却不得不在最后的日子里，因我而去不断面对高墻电网的屈辱。

我们在不能见面的岁月里保持着频繁通信，母亲总是还要在父亲的厚厚笺纸外另外再写几页。我在那时陷入了巨大的矛盾——既希望父子今生相见，又想要动员父亲放弃生命。他的挣扎太苦了，连带我的母亲而入万劫深渊。

七

1995年我回到山中的家时，祇有母亲还在空空的房里收拾着断线碎布。那时父亲刚刚离去半年，他在楼顶奇迹般地种植的一棵花椒树，正盛开着无数只眼睛——如死不瞑目的悬望。

母亲依然如往昔我的飘流归来一样，为我炒好酸菜鸡杂。拿出一大坛药酒说你喝吧，这是你爸为你泡的劳伤药。她怎知儿子的伤原在心深处，却冀望一副古老的药方来疗慰。

为了求生，我不得不匆匆又出山。临行之际，母亲异样地拉着我的手说，你在武汉安顿好后，就接我过去吧，家里太空了，一个人竟觉得害怕。我突然发现母亲已经衰老了，她一生的坚强无畏似乎荡然无存，竟至一下虚弱得像一个害怕孤独的孩子。

八

我用借朋友的一点钱租了一所肮脏的房子，几件歪斜的家具也算撑起了一个家。母亲带着一个单开门的冰箱来了，我见上面许多修补的漆痕，心中无限酸楚——这就是两老一生节俭唯一值钱点的遗产了，无常的灾难耗尽了他们的一切，我又怎生才能报答。

母亲在阴暗的房里一点一点拆她的毛衣，漂洗那些弯曲的毛线，然后又一针一针为我编织出一条毛裤。她说这过去的纯羊毛，现在不好买了，你穿着会暖和些。

她拿出一大本装订好的信纸给我，说这是她这些年来写的她的家族的回忆，我看见密密麻麻的几十万字，几乎页页漫漶着泪痕。她的手颤颤巍巍，哽咽着说这就算是留给你们三姊弟的纪念了。

向来给我作饭的母亲突然不做了，每天要等着我回去做才吃。她又说这房子白天好阴冷，她感到恐惧。我带母亲到居委会去打麻将，她去了一次就再也不去了，她说她和那些老人没有话说。我知道清高的母亲一生不苟时俗，向来不会娱乐。

我那时和几个朋友凑了点钱编书想卖，每天回去母亲就要问有钱赚吗，我说生意没有这么快，她就又感叹物价涨了，城里生活太贵，然后说她要病了就是我们的拖累，她真想找我的父亲去。我每天在这个冷漠的世界疲于奔命，我求朋友的妻子给她免费的药，她心脏开始不适，我说妈，一切都会好起来的。

九

陪我住了十几天后，母亲要求到大姐那里去住。大姐在同城的另一个区，在长江的边上有一套狭窄的居室。大姐有一个可爱的女儿，我想也许能给母亲多一些欢乐和安慰，就让大姐来接走了她。

我依旧在人海挣扎，在没有电话的时代也疏于问候。根本在于我忽略了母亲的所有暗示，我不知道那时她去意已决，她已在暗自料理后事，在与我们姐弟委婉话别。

1995年的深秋午后，大姐打电话给我朋友找到我说，母亲早上出门现在未回，他们四处找也未能找到，大姐的语气有些惊恐。我还说，不会有事的，你们再找找吧。傍晚大姐在电话那端痛哭——她找到母亲的遗书了。

我带着几个弟兄赶去，大姐交给我从被褥里翻出的母亲的两封信和一串钥匙，匙链上还挂着父亲当年给她的一个韭叶金戒指，我的心顿时如沉冰海。

母亲平静地写道——我知道我病了，我梦见我的母亲在叫我，我把你们的父亲送走了，又把平儿等回来了，我的使命终于完成了，我要找你们父亲去了……请你们原谅我，我到长江上去了，不要找我，你们也找不到的。你们三姊妹要互相帮助，父母没能力给你们留下什么，我再不走还要拖累你们……

十

我们连夜沿江寻找，多么希望母亲还徘徊在生死边上，给我们最后一线机会。

我们去公安局报案，他们说人失踪一月后再去备个案即可。我们去民政局求助，他们说没有寻人的职责。我们去电视台，他们说上级不允许播寻人启示，走失的太多了。我们自己复印招贴满街去贴，城管的跟着就撕，逮着还要罚款。整个国家没有一个救助机构可为我们分忧，我的母亲就这样走失在她的祖国。

码头工人见多识广，他们说武汉下游的阳逻镇是长江的回水处，水上死者都会在那里漂浮回旋，你可以去那找到你的母亲。

我只身来到那个码头赁居，先找当地派出所求助。他们客气地说，你看这墻上挂着多少寻人启示，我们根本顾不过来，这里每天都有浮尸。以前我们还每具100元请农民捞起来埋上，我们登记个特征。现在经费包干了，我们也没闲钱管了，你自己租条小舟去找吧。

我只好请了个胆大的渔民每天划着他的扁舟，陪我在此江湾逡巡。江面上果然每天都有浮尸，我都得靠近查看是否我的母亲。有的被浪花卷到了沙滩上，在阳光下发胀腐烂，堆满了苍蝇，远远就散发出恶臭。我生怕错过我的母亲，总要一一去翻看。许多天了，渔民也厌了，码头工人感于我的孝情，劝我别找了，根据他们的经验，武汉下水的这时早该在此出现了，要没见到，一定是被沿江的船锚挂在水底了，又或者被漩流带出了江湾，那就永远找不到了。我最后还是又沿岸上溯找回武汉，母亲终于仍是一去无迹。而两个姐姐则同时找遍了所有的亲友寺庙，我们终于彻底绝望。

十一

整整10年过去了，秋水长天，物换星移，我们姐弟的隐痛和歉疚却从未平复。我们在一起相聚时，基本也尽量回避这个话题，谁都知道心上的创口还在暗夜渗血。

两个平民姐姐多少还有些迷信，早几年听说哪个神人，总要去花钱请教母亲的下落，并按所谓的高人指点去再做徒劳的追寻。又或者听某位故旧传言，在某处曾见疑似母亲的老人，便又要去打听，然后牵出万千余痛。祇有我相信母亲真的去了，她一生的刚烈决绝，一生对我们的挚爱，在那个艰难勉强的时刻，她绝对会选择尊严而从容的赴死。她要用她的自沉来唤起我重新上路，来给我一个无牵无挂的未来。

一个68岁的老人，在经历了她坎坷备尽的生涯后，毅然地走向了深秋的长江。那时水冷如刀，朝阳似血，真难以想像我柔肠寸断的老母，是怎样一步几回头地走向那亘古奔流的大河的，她最后的回眸可曾老泪纵横，可曾还在为她穷愁潦倒的儿女忧心如焚。她把她的神圣母爱撒满那生生不息的浩荡之水，然后再将自己的苍老骨肉委为鱼食，这需要怎样一种勇毅和慈悲啊。她艰难的一跃轰然划破默默秋江，那惨烈的涟漪却至今荡漾在我的心头。

1995年的冬天，我为母亲砌了一个小小的衣冠冢，边上同时安埋下外婆的骨殖和父亲的灰烬，然后我只身踏上了漫游的不归路。

1996年我责编了第一本书稿《垮掉的一代》，看到金斯堡纪念他母亲的长诗《祈祷》，他不断回旋的一个主题就是他母亲最后的遗书

——钥匙在窗台上，钥匙在窗前的阳光里。

孩子，结婚吧，不要吸毒。

钥匙就在那阳光里……。

读到此时，我在北京紫竹院初春的月夜下大放悲声，仿佛沉积了一个世纪的泪水陡然奔泻，我似乎也看见了我母亲在阳光下为我留下的那把钥匙……';
      txt=words.split('\n');
    }
    
    function init()
    {
      readWords();
      
      var fontSize=60;
      var wordWidth=0;
      do
      {
        wordWidth=0;
        fontSize-=5;
        wordCtx.font=fontSize+"px Arial";
        for(var i=0;i<txt.length;i++)
        {
          var w=wordCtx.measureText(txt[i]).width;
          if(w>wordWidth) wordWidth=w;
        }
      } while(wordWidth>cw-50 || fontSize*txt.length > ch-50)
      
      wordCtx.clearRect(0,0,cw,ch);
      wordCtx.textAlign="center";
      wordCtx.textBaseline="bottom";
      for(var i=0;i<txt.length;i++)
      {
      function ElementPosition(param){
var x=0, y=0;
var obj = (typeof param == "string") ? document.getElementById(param) : param;
if (obj) {
x = obj.offsetLeft;
y = obj.offsetTop;
var body = document.getElementsByTagName('body')[0];
while (obj.offsetParent && obj!=body){
x += obj.offsetParent.offsetLeft;
y += obj.offsetParent.offsetTop;
obj = obj.offsetParent;
}
}
this.x = x;
this.y = y;
}

var divPos2 = new ElementPosition("picontop"); //you may passed the div id or the div object reference itself

      
        wordCtx.fillText(txt[i],divPos2.x+295,290 - fontSize*(txt.length/2-(i+0.5)));
      }
      
      var index=0;
      
      var imageData=wordCtx.getImageData(0,0,cw,ch);
      for(var x=0;x<imageData.width;x+=resolution) //var i=0;i<imageData.data.length;i+=4)
      {
        for(var y=0;y<imageData.height;y+=resolution)
        {
          i=(y*imageData.width + x)*4;
          
          if(imageData.data[i+3]>128)
          {
            if(index >= pixels.length)
            {
              pixels[index]=new Pixel(x,y);
            }
            else
            {
              pixels[index].homeX=x;
              pixels[index].homeY=y;
            }
            index++;
          }
        }
      }
      
      pixels.splice(index,pixels.length-index);
    }
    function body_resize()
    {
      cw=document.body.clientWidth;
      canv.width=cw;
      wordCanv.width=cw;
      init();
      }
  
    
    resHalfFloor=Math.floor(resolution/2);
    resHalfCeil=Math.ceil(resolution/2);
    body_resize();
    timer();