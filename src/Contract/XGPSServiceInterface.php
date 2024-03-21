<?php
declare(strict_types=1);
namespace GiocoPlus\XGPS\Contract;
/**
 * Xin GPS
 */
interface XGPSServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $backUrl
     * @param string $vendor_code
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $vendor_code);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $bet_id
     * @param string $language
     * @param string $vendor_code
     * @return mixed
     */
    function gameDetail(string $op_code, string $bet_id, string $language, string $vendor_code);

    /**
     * 會員帳號轉換(GF->XGPS)
     * @param string $op_code
     * @param array $vendor
     * @param string $member_code
     * @return mixed
     */
    function accountToVendor(string $op_code, array $vendor, string $member_code);

    /**
     * 會員帳號轉換(XGPS->GF)
     * @param string $op_code
     * @param array $vendor
     * @param string $vendor_account
     * @return mixed
     */
    function accountToOperator(string $op_code, array $vendor, string $vendor_account);
}

