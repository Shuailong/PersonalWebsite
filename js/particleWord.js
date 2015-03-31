
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
      words='梁帅龙 Liang Shuailong';
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