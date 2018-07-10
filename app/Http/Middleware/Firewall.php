<?php

namespace App\Http\Middleware;

use App\FireWallBannedIp;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Cache;

class Firewall
{
    /**
     * Not so fast blacklisted IP owner.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->isIpAddressBanned()) {
            return res(423, 'Sadly your IP address has been banned from accessing Case Root. If you believe this has been done by mistake, please contact almo7amady7@gmail.com.');
        }

        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT,         
    DELETE, OPTIONS');
    }

    /**
     * Is request's IP address blacklisted?
     *
     * @return bool
     */
    protected function isIpAddressBanned()
    {
        $banned_ip_addresses = Cache::remember('firewall-banned-ips', 60 * 24 * 7, function () {
            return FireWallBannedIp::where('unban_at', '>=', Carbon::now())->pluck('ip_address');
        });

        return $banned_ip_addresses->contains(getRequestIpAddress());
    }
}
