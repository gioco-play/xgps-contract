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
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $backUrl = null);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $bet_id
     * @param string $language
     * @return mixed
     */
    function gameDetail(string $op_code, string $bet_id, string $language);
}

