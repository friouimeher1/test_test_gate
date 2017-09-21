<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Carbon;
use Auth;
class NotificationController extends Controller
{
  public function index(Admin $admin)
  {
      $admin = Auth::guard('admin')->user();
      //dd($admin);
      $notifications = $admin->unreadnotifications()->count();

      $notificationsTechnicien = $admin->unreadnotifications()->where('type','App\Notifications\SendNotification')->count();
      return view('admin.notifications.home', compact('admin', 'notifications','notificationsTechnicien'));
  }

  public function notification(Admin $admin)
  {
      $admin = Auth::guard('admin')->user();
      $notifications = $admin->unreadnotifications()->count();
      $notificationsUser = $admin->unreadnotifications()->where('type','App\Notifications\Register')->count();
      $notificationsCommercant = $admin->unreadnotifications()->where('type','App\Notifications\RegisterCommercant')->count();
      return view('admin.notification', compact('admin', 'notifications','notificationsCommercant', 'notificationsUser'));
  }

  public function markAsRead($id) {
      $admin = Auth::guard('admin')->user();
      $notification = $admin->notifications()->where('id',$id)->first();
      if ($notification)
      {
          $notification->markAsRead();
          return back();
      }
      else
          return back()->withErrors('we could not found the specified notification');
  }


  public function delete($id) {
      $admin = Auth::guard('admin')->user();
      $notification = $admin->notifications()->where('id',$id)->first();
      if ($notification)
      {
          $notification->delete();
          return back();
      }
      else
          return back()->withErrors('we could not found the specified notification');
  }
}
