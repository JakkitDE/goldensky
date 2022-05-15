<?php
/*
	Copyright (c) 2021 Anders G. Jørgensen - http://spirit55555.dk
	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

declare(strict_types=1);

namespace Spirit55555\Minecraft;

class MinecraftVotifier {
	const VOTE_FORMAT       = "VOTE\n%s\n%s\n%s\n%d\n";
	const PUBLIC_KEY_FORMAT = "-----BEGIN PUBLIC KEY-----\n%s\n-----END PUBLIC KEY-----";

	private $public_key;
	private $server_ip;
	private $port;
	private $service_name;

	public function __construct(string $public_key = null, string $server_ip = null, int $port = 8192, string $service_name = null) {
		$this->public_key   = $this->formatPublicKey($public_key);
		$this->server_ip    = $server_ip;
		$this->port         = $port;
		$this->service_name = $service_name;
	}

	public function __get(string $name) {
		return isset($this->$name) ? $this->$name : null;
	}

	public function __set(string $name, $value): void {
		if ($name == 'public_key')
			$this->public_key = $this->formatPublicKey($value);
		else
			$this->$name = $value;
	}

	private function formatPublicKey(string $public_key): string {
		$public_key = wordwrap($public_key, 65, "\n", true);
		$public_key = sprintf(self::PUBLIC_KEY_FORMAT, $public_key);

		return $public_key;
	}

	public function sendVote(string $username): bool {
		if (php_sapi_name() !== 'cli') {
			//Detect proxy and use correct IP.
			$address = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
		}

		else {
			//Script is run via CLI, use server name.
			$address = $_SERVER['SERVER_NAME'];
		}

		$vote = sprintf(self::VOTE_FORMAT, $this->service_name, $username, $address, time());

		openssl_public_encrypt($vote, $data, $this->public_key);

		$socket = @fsockopen($this->server_ip, $this->port);

		if ($socket) {
			if (fwrite($socket, $data)) {
				fclose($socket);
				return true;
			}
		}

		return false;
	}
}
?>
<h2>Voten</h2>
<p>
	Im Folgenden kannst du deinen Vote platzieren!
	<?php
		$votifier = new MinecraftVotifier('MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAi21TFo3Vbt+RUYDri8Ge0owdn2/1SwruFaO2wUKGqsQS0wJ/svf8W+RxptCO9+AsphdN2ouBTY9gaImmIanlbSTQcGGt5HipU6mGHctgyb0ucw8MBOnl5UPtKhFTldEokbbq78/hG7e8BAidgkCpW4LvQVjy2QO8RcaTw7gTgGCtZ596kunBqfzbIdY0ncBxot3RpIBGGrssUEqcHH0jJeLAa4ZM3lRcYU+v8sGwZ7IU+nUyuNZuJ8/vFsj+TDlwkotXBO+rj+9w5El873mE7i31vbHdzzz8WfP55Z2VvcYkDCPmv3o6Ji1e0QN2p2TVX6CNATCfFDb+HF3UuJbgbQIDAQAB', '87.98.147.82', 8192, 'golden-sky');
		$votifier->sendVote('Kadnick');

	?>
</p>