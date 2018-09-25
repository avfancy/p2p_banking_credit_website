/* 报表统计 */
//初始化echarts对象
var mycharts=echarts.init(document.getElementById('mybox')); 
//配置报表的选项和数据
var option = {
    //标题显示
    title : {
        text: '借款类型金额统计',
        subtext: '2018-09统计',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient : 'vertical',
        x : 'left',
        data:[]
    },
    toolbox: {
        show : true,
        feature : {
            mark : {show: true},
            dataView : {show: true, readOnly: false},
            magicType : {
                show: true, 
                type: ['pie', 'funnel'],
                option: {
                    funnel: {
                        x: '25%',
                        width: '50%',
                        funnelAlign: 'left',
                        max: 1548
                    }
                }
            },
            restore : {show: true},
            saveAsImage : {show: true}
        }
    },
    //是否可以重新计算
    calculable : true,
    //序列数据
    series : [
        {
            name:'访问来源',
            type:'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[]
        }
    ]
};
//为echarts对象加载数据
mycharts.setOption(option);


//发起ajax去后端请求数据
$.get("./api/borrowStatistics.php",function(result){
    //修改相应位置数据
    option.legend.data=result.title;
    option.series[0].data=result.data;
    
    //隐藏loading动画
    mycharts.hideLoading();
    //为echarts对象加载数据
    mycharts.setOption(option);
    // console.log("后端返回的数据：",result);
},"json")



