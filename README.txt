Issues: 
1.BookingController line 21 .  protected $repository; should be private.
2.BookingController . linme 36 . the index function of the resource controller should not have the this statement . 

public function index(Request $request)

instead public function index()

3. dont need this line. 
elseif ($request->__authenticatedUser->user_type == env('ADMIN_ROLE_ID') || $request->__authenticatedUser->user_type == env('SUPERADMIN_ROLE_ID'))

just use the Auth  and line the role of the use.

CALLING ENV DIRECT IS NOT GOOD.

4. BookingController line 6. remove use DTApi\Http\Requests; . its not using

5. The converttoDate function should in Helper class.

6. sendPushNotificationToSpecificUsers function should have a return value.


