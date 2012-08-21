		<script>
    		KISSY.use('core/init', function(S, Page){
    			Page.init({
					uploader: {
						urlsInputName: 'pictures{bizOrderId}',
						name:'picture',
						action:'http://rate.taobao.com/upload_pic.htm',
						data:{'sellerNumId':'641471180', 'bizOrderId': '{bizOrderId}', '_tb_token_':'2ff5568de60581c4d40bef9006d57d39'}
					},
                    placeholder : {
						                            GOOD : "写点评价吧，你的评价对其他买家有很大帮助的。",
                            NORMAL : "咳咳，你给卖家打了中评，需要说明原因哦。",
                            BAD : "咳咳，你给卖家打了差评，需要说明原因哦。"
						                    },
                    star_tooltip : {
													description:[
																	"差得太离谱，与卖家描述的严重不符，非常不满"
																			,
																										"部分有破损，与卖家描述的不符，不满意"
																			,
																										"质量一般，没有卖家描述的那么好"
																			,
																										"质量不错，与卖家描述的基本一致，还是挺满意的"
																			,
																										"质量非常好，与卖家描述的完全一致，非常满意"
																								]
							    							    								,
																												attitude:[
																	"卖家态度很差，还骂人、说脏话，简直不把顾客当回事"
																			,
																										"卖家有点不耐烦，承诺的服务也兑现不了"
																			,
																										"卖家回复问题很慢，态度一般，谈不上沟通顺畅"
																			,
																										"卖家服务挺好的，沟通挺顺畅的，总体满意"
																			,
																										"卖家的服务太棒了，考虑非常周到，完全超出期望值"
																								]
							    							    								,
																												delivery:[
																	"再三提醒下，卖家才发货，耽误我的时间，包装也很马虎"
																			,
																										"卖家发货有点慢的，催了几次终于发货了"
																			,
																										"卖家发货速度一般，提醒后才发货的"
																			,
																										"卖家发货挺及时的，运费收取很合理"
																			,
																										"卖家发货速度非常快，包装非常仔细、严实"
																								]
							    							    								,
																												logistics:[
																	"物流公司态度非常差，送货慢，外包装有破损"
																			,
																										"物流公司服务态度挺差，运送速度太慢"
																			,
																										"物流公司服务态度一般，运送速度一般"
																			,
																										"物流公司态度还好吧，送货速度挺快的"
																			,
																										"物流公司服务态度很好，运送速度很快"
																								]
							    																				                    },
					levels: [
						 "很不满意",
						 "不满意",
						 "一般",
						 "满意",
						 "很满意"
					]
                });
            });
        </script>
	</div>
</div>


			<!-- end content -->
			
							<!-- from vmcommon -->

<!-- end vmcommon -->

						
		</div>
		<!-- end page -->
		<script>
			KISSY.use('common/manage-base')
		</script>


		<!--尺码评价-->
        <link rel="stylesheet" href="sizerate.css" />
        <script src="sizerate.js"></script>

	</body>
</html>