<?php
include "rate/header.php";
?>
<!--评价 START-->
<div class="line rate">
	<div class="itemlist">
		<div class="listhd">
			<h3>对商品进行评价</h3>
			<ul class="act">
				<li>
					<input id="annoy-all" name="annoy-all" type="checkbox"/>
					<label for="annoy-all">全部匿名评论</label>
				</li>
			</ul>
		</div>
		<div class="listbd">
			<form id="rateListForm" target='_top'
			class='remark-form'
			action="/remarkSeller4C.htm" name="addfeedback" method="post"
			data-checkLoginJson="http://rate.taobao.com/login_check_js.htm?type=json"
			data-checkLoginCallback="http://rate.taobao.com/login_check_js.htm?type=callback" >
				<fieldset>
					<input name='_tb_token_' type='hidden' value='54734fb1efee7'>
					<ul class="labels">
						<li class="itemdetail">
							宝贝
						</li>
						<li class="radiolabel">
							<input id="rate-good-all" name="good-all" type="checkbox"/>
							<label for="rate-good-all">好评</label>
						</li>
						<li class="radiolabel">
							中评
						</li>
						<li class="radiolabel">
							差评
						</li>
					</ul>
					<ul class="rate-list">
						<div>
							<input type="hidden" name="bizOrderIds" value="200004843756017" />
							<input type="hidden" name="auctionId200004843756017" value="14961119073" />
							<input type="hidden" name="auctionPictUrl200004843756017" value="i3/641471180/T2XO1zXkxaXXXXXXXX_!!641471180.jpg" />
							<input type="hidden" name="auctionSku200004843756017" value="颜色分类:浅棕;尺码:41" />
							<input type="hidden" name="prompt200004843756017" value="亲，你的评价会对其他买家帮助很大，一起分享下吧" />
							<input type="hidden" name="giftEventId200004843756017" value="0" />
							<input type="hidden" name="giftDesp200004843756017" value="" />
							<input type="hidden" name="canUploadPic200004843756017" value="false" />
							<input type="hidden" name="leafCatId200004843756017" value="50016744" />
							<input type="hidden" name="rootCatId200004843756017" value="50010728" />
							<input type="hidden" name="auctionPrice200004843756017" value="19.0" />
						</div>

						<li data-id="200004843756017" class="rate-box st-show-msg-box" data-prompt='亲，你的评价会对其他买家帮助很大，一起分享下吧'>
							<div class="item-rate-info" data-spm="1000328">
								<div class="item-detail">
									<a href="http://item.taobao.com/item.htm?id=14272958184&" target='_blank' class="item-d-img"> <img width="110" height="110" src="http://img01.taobaocdn.com/bao/uploaded/i1/T1hZCGXhFXXXaJGiIV_020844.jpg" /> </a>
									<div class="item-title">
										<a href="http://item.taobao.com/item.htm?id=14272958184&" target='_blank' title="时尚男鞋子男士休闲鞋板鞋潮流男款帆布鞋透气单鞋英伦风格懒人鞋">时尚男鞋子男士休闲鞋板鞋潮流男款帆布鞋透气单鞋英伦风格懒人鞋</a>
									</div>
									<ul class="sku">
										<li>
											颜色分类:浅棕;尺码:41
										</li>
									</ul>
								</div>
								<div class="item-rate-score">
									<span class="rate-score">不加分</span>
								</div>
							</div>
							<div class="item-rate-main">
								<div class="item-rate-act">
									<div class="rate-control">
										<ul>
											<li class="good">
												<label for="rate-good-200004843756017">
													<input  id="rate-good-200004843756017" name="rates200004843756017" type="radio" value="1" class="good-rate"/>
													<i class="icon icon-rank icon-good"></i> <span class="label-hidden">好评</span> </label>
											</li>
											<li class="normal">
												<label for="rate-normal-200004843756017">
													<input  id="rate-normal-200004843756017" name="rates200004843756017" type="radio" value="0" class="noraml-rate"/>
													<i class="icon icon-rank icon-normal"></i> <span class="label-hidden">中评</span> </label>
											</li>
											<li class="bad">
												<label for="rate-bad-200004843756017">
													<input  id="rate-bad-200004843756017" name="rates200004843756017" type="radio" value="-1" class="bad-rate"/>
													<i class="icon icon-rank icon-bad"></i> <span class="label-hidden">差评</span> </label>
											</li>
										</ul>
									</div>
									<div class="rate-msg-handle">
										<a href="#" class="show-msg-box"><i class='icon icon-addcomment'></i><span>发表评论</span></a>
									</div>
								</div>
								<div class="rate-msg-box">

								    <div class="sizebar">
								        <label class="size-lbl">平时所穿尺码</label>
								        <ul data-property="尺码" class="optionList sizeList">
                                            <li data-value="37"><a href="#" class="first"><span>37</span></a></li>
                                            <li data-value="38"><a href="#"><span>38</span></a></li>
                                            <li data-value="39"><a href="#"><span>39</span></a></li>
                                            <li data-value="40"><a href="#"><span>40</span></a></li>
                                            <li data-value="41" class="sel"><a href="#"><span>41</span></a></li>
                                            <li data-value="42"><a href="#"><span>42</span></a></li>
                                            <li data-value="43" id="sel1"><a href="#"><span>43</span></a></li>
                                        </ul>

								        <label class="feel-lbl">上脚感受</label>
								        <ul data-property="尺码" class="optionList fellList">
                                            <li data-value="small"><a href="#" class="first"><span>偏小</span></a></li>
                                            <li data-value="fit"><a href="#"><span>合适</span></a></li>
                                            <li data-value="larger" class="sel"><a href="#"><span>偏大</span></a></li>
                                        </ul>

                                        <a href="#" class="fold-msg-box"><i class="icon-foldcomment"></i>收起评论</a>
                                        <a href="#" class="show-msg-box" style="display:none"><i class="icon icon-addcomment"></i><span>添加评论</span></a>
								    </div>

									<div class="bd">
										<div class="textinput ph-hide">
											<span class="ph-label"></span>
											<textarea name="rateContents200004843756017" maxlength="500" aria-labelby="label-ti-200004843756017" class="rate-msg"></textarea>
											<div class="text-counter">
												<strong class="r-t-counter">500</strong>字
											</div>
										</div>
									</div>

                                    <!--<div class="ft"><a href="#" class="close-msg-box">收起评论</a></div>-->
								</div>
								<div class='share-box'>
									<input id="share-rate-200004843756017" name="sharePrivacy200004843756017" value="true" type="checkbox"  class="rate-share"/>
									<label for="share-rate-200004843756017">晒到个人主页</label>
									<input id="annoy-rate-200004843756017" name="anony200004843756017" value="1" type="checkbox"  class="rate-annoy"/>
									<input type="hidden" name="forceAnnoy200004843756017" value="false"/>
									<label for="annoy-rate-200004843756017">匿名评价</label>
								</div>
							</div>
						</li>

					</ul>
				</fieldset>
				<fieldset>
					<h2><span>店铺动态评分</span></h2>
					<div class="dsr-box">
						<div id="starstip" class="starstip">
							<p>
								小提示：点击星星就能打分了，该打分完全是匿名滴。
							</p>
						</div>
						<ul class="stars">
							<li>
								<label>宝贝与描述相符</label>
								<span data-type="description" class="rate-stars"> <label>
										<input type="radio" value="1" name="description"  />
										一星</label> <label>
										<input type="radio" value="2" name="description"  />
										二星</label> <label>
										<input type="radio" value="3" name="description"  />
										三星</label> <label>
										<input type="radio" value="4" name="description"  />
										四星</label> <label>
										<input type="radio" value="5" name="description"  />
										五星</label> </span>
							</li>
							<li>
								<label>卖家的服务态度</label>
								<span data-type="attitude" class="rate-stars"> <label>
										<input type="radio" value="1" name="attitude"  />
										一星</label> <label>
										<input type="radio" value="2" name="attitude"  />
										二星</label> <label>
										<input type="radio" value="3" name="attitude"  />
										三星</label> <label>
										<input type="radio" value="4" name="attitude"  />
										四星</label> <label>
										<input type="radio" value="5" name="attitude"  />
										五星</label> </span>
							</li>
							<li>
								<label>卖家发货的速度</label>
								<span data-type="delivery" class="rate-stars"> <label>
										<input type="radio" value="1" name="delivery"  />
										一星</label> <label>
										<input type="radio" value="2" name="delivery"  />
										二星</label> <label>
										<input type="radio" value="3" name="delivery"  />
										三星</label> <label>
										<input type="radio" value="4" name="delivery"  />
										四星</label> <label>
										<input type="radio" value="5" name="delivery"  />
										五星</label> </span>
							</li>
							<li>
								<label>物流发货的速度</label>
								<span data-type="logistics" class="rate-stars"> <label>
										<input type="radio" value="1" name="logistics"  />
										一星</label> <label>
										<input type="radio" value="2" name="logistics"  />
										二星</label> <label>
										<input type="radio" value="3" name="logistics"  />
										三星</label> <label>
										<input type="radio" value="4" name="logistics"  />
										四星</label> <label>
										<input type="radio" value="5" name="logistics"  />
										五星</label> </span>
							</li>
						</ul>
					</div>
				</fieldset>
				<div class="submitbox">
					<input type="hidden" name="parentTradeId" value="200004843746017" />
					<input type="hidden" name="raterType" value="0" />
					<input type="hidden" name="raterUid" value="66461760" />
					<input type="hidden" name="ratedUid" value="641471180" />
					<input type="hidden" name="bizType" value="200" />
					<input type="hidden" name="dsrHaveDone" value="" />
					<input type="hidden" name="needRateNum" value="2" />
					<input type="hidden" name="buyerNick" value="海盗" />
					<input type="hidden" name="sellerNick" value="ziaqing" />

					<!--<button type="submit"  class="submit submit-btn" >-->
					<button type="button"  class="submit submit-btn" id="size-sub-btn">
						提交评论
					</button>
					<input type="hidden" name="event_submit_do_create_rate" value="anything" />
					<input type="hidden" name="action" value="rate_action" />
				</div>
			</form>
		</div>
	</div>
</div>
<!--评价 END-->
<?php
include "rate/footer.php";
