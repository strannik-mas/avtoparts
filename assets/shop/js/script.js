var TINY={};

function T$(i){return document.getElementById(i)}
function T$$(e,p){return p.getElementsByTagName(e)}

function inOut(h3,h2,p,i,t,obj){
	var int;
	clearInterval(int);
	var n = 1;
	var znak = false;
	int = setInterval(function () {		
		if (n > 1) {
			clearInterval(int);
			return;
		}
		h3.style.opacity = n;
		h3.style.filter = 'alpha(opacity=' + 100*n + ')';
		h2.style.opacity = n;
		h2.style.filter = 'alpha(opacity=' + 100*n + ')';
		p.style.opacity = n;
		p.style.filter = 'alpha(opacity=' + 100*n + ')';
		if(znak) n += 0.1
		else n -= 0.1;
		if(n <= 0){
			n = 0;
			znak = true;
			h3.innerText = obj.h3[i].innerText;
			h2.innerText = obj.h2[i].innerText;
			p.innerText = obj.par[i].innerText;
		}
	}, t);
}

TINY.slider=function(){
	function slide(n,p){this.n=n; this.init(p)}
	slide.prototype.init=function(p){
		var s=this.x=T$(p.id), u=this.u=T$$('ul',s)[0], c=this.m=T$$('li',u), l=c.length, i=this.l=this.c=0; this.b=1;						
		if(p.navid&&p.activeclass){this.g=T$$('li',T$(p.navid)); this.s=p.activeclass}														
		
		this.h3=T$$('h3',u), this.h2=T$$('h2',u), this.par=T$$('p',u), this.link=T$$('a',u), this.banner=T$("banner-slider");
		this.banner.getElementsByTagName('h3')[0].innerHTML = this.h3[0].innerText;
		this.banner.getElementsByTagName('h2')[0].innerHTML = this.h2[0].innerText;
		this.banner.getElementsByTagName('p')[0].innerHTML = this.par[0].innerText;
		this.banner.getElementsByTagName('a')[0].href = this.link[0].href;
//console.dir(this.x);
	/*	
		n=this.n - �������� 'slideshow', ������������ ��� ������
		p - ����� ����������, ������������ ��� ������
		s=this.x - ������� <div id="slider">
		u=this.u - ��� <ul> � <div id="slider"> , � �� ��� ����
		c=this.m - ��� <li> � ����������� <ul>
		l - ����� ��������� ���������� <li>
		this.g - ��� <li> � <ul id="slide-pagination" class="slide-pagination">; 
		this.s == 'current'
		this.a=4
		this.p=false
		this.r=false
		this.e=true
		this.v=false
	*/	
		this.a=p.auto||0; this.p=p.resume||0; this.r=p.rewind||0; this.e=p.elastic||false; this.v=p.vertical||0; s.style.overflow='hidden';

		for(i;i<l;i++){if(c[i].parentNode==u){this.l++}}
		if(this.v){;
			u.style.top=0; this.h=p.height||c[0].offsetHeight; u.style.height=(this.l*this.h)+'px'		//�����-�� ��������� 
		}else{
			u.style.left=0; this.w=p.width||c[0].offsetWidth; u.style.width=(this.l*this.w)+'px'
		}
		this.nav(p.position||0);

		if(p.position){this.pos(p.position||0,this.a?1:0,1)}else if(this.a){this.auto()}				//��������� ����� ��� 0 ����� �������
		if(p.left){this.sel(p.left)}
		if(p.right){this.sel(p.right)}
	},
	slide.prototype.auto=function(){
		this.x.ai=setInterval(new Function(this.n+'.move(1,1,1)'),this.a*1500)							//������������� ������� � ��������� ����� ������ ��������
	},
	slide.prototype.move=function(d,a){
		var n=this.c+d;														//0+1 �������
		if(this.r){n=d==1?n==this.l?0:n:n<0?this.l-1:n}
		this.pos(n,a,1)
	},
	slide.prototype.pos=function(p,a,m){									//������� �������
		var v=p; clearInterval(this.x.ai); clearInterval(this.x.si);
		if(!this.r){														//������� ���� �.�. false
			if(m){
				if(p==-1||(p!=0&&Math.abs(p)%this.l==0)){
					this.b++;
					for(var i=0;i<this.l;i++){this.u.appendChild(this.m[i].cloneNode(1))}
					this.v?this.u.style.height=(this.l*this.h*this.b)+'px':this.u.style.width=(this.l*this.w*this.b)+'px';
				}
				if(p==-1||(p<0&&Math.abs(p)%this.l==0)){
					this.v?this.u.style.top=(this.l*this.h*-1)+'px':this.u.style.left=(this.l*this.w*-1)+'px'; v=this.l-1
				}
//this.c - ������� 	

			}else if(this.c>this.l&&this.b>1){
				v=(this.l*(this.b-1))+p; p=v
			}
		}
		
		var t=this.v?v*this.h*-1:v*this.w*-1, d=p<this.c?-1:1; this.c=v; var n=this.c%this.l; this.nav(n);
		if(this.e){t=t-(8*d)}
		this.x.si=setInterval(new Function(this.n+'.slide('+t+','+d+',1,'+a+')'),10)
		
//console.log(this.c);
		var j = this.c;
		if(this.c==4) var j = 0;
		inOut(
			this.banner.getElementsByTagName('h3')[0],
			this.banner.getElementsByTagName('h2')[0],
			this.banner.getElementsByTagName('p')[0],
			j,
			100,
			this
		);
		this.banner.getElementsByTagName('a')[0].href = this.link[j].href;
	},
	slide.prototype.nav=function(n){
		if(this.g){for(var i=0;i<this.l;i++){this.g[i].className=i==n?this.s:''}}							//��������� ������� ��� �����������
	},
	slide.prototype.slide=function(t,d,i,a){
		var o=this.v?parseInt(this.u.style.top):parseInt(this.u.style.left);
		if(o==t){
			clearInterval(this.x.si);
			if(this.e&&i<3){
				this.x.si=setInterval(new Function(this.n+'.slide('+(i==1?t+(12*d):t+(4*d))+','+(i==1?(-1*d):(-1*d))+','+(i==1?2:3)+','+a+')'),10)
			}else{
				if(a||(this.a&&this.p)){this.auto()}
				if(this.b>1&&this.c%this.l==0){this.clear()}
			}
		}else{
			var v=o-Math.ceil(Math.abs(t-o)*.1)*d+'px';
			this.v?this.u.style.top=v:this.u.style.left=v
		}
	},
	slide.prototype.clear=function(){
		var c=T$$('li',this.u), t=i=c.length; this.v?this.u.style.top=0:this.u.style.left=0; this.b=1; this.c=0;
		for(i;i>0;i--){
			var e=c[i-1];
			if(t>this.l&&e.parentNode==this.u){this.u.removeChild(e); t--}
		}
	},
	slide.prototype.sel=function(i){
		var e=T$(i); e.onselectstart=e.onmousedown=function(){return false}
	}
	return{slide:slide}
}();