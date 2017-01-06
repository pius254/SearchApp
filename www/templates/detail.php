<!--<ion-header-bar class="bar-positive">
	<h2 class="title">More Info</h2>
</ion-header-bar>-->

<ion-view view-title="{{ item.name }}">
	<ion-content class="padding">
		<ion-list class="list-inset">
			<ion-item class="item-text-wrap" ng-repeat="item in artists | filter: { shortname: whichartist }">
				<img ng-src="img/{{item.shortname}}.jpg" alt="Photo of {{item.name}}">
				<h2>{{item.name}}</h2>
      			<h3>{{item.reknown}}</h3>
      			<p>{{item.bio}}</p>
			</ion-item>
			<ion-item ng-repeat="item in artists | filter: { shortname: whichartist }">
				<h3>SMS Your Favourite</h3>
				<br>
		    	<form role="form">
			  		<div class="form-group">
				    	<label for="phone">Phone Number</label>
				    	<!--<p class="form-control-static">{{item.phone}}</p>-->
				    	<input type="tel" class="form-control" name="phone" value="{{item.phone}}" disabled>
			 		</div>
			 		<div class="form-group">
				    	<label for="message">Message</label>
				    	<textarea type="text" class="form-control" name="message" placeholder="Type Message" style="resize: none"></textarea>
			  		</div>
			  		<button type="submit" class="btn btn-primary">SEND</button>
				</form>
			</ion-item>
		</ion-list>
	</ion-content>
</ion-view>