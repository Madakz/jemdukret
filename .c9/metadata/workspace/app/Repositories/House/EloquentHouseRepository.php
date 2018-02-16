{"filter":false,"title":"EloquentHouseRepository.php","tooltip":"/app/Repositories/House/EloquentHouseRepository.php","undoManager":{"mark":78,"position":78,"stack":[[{"start":{"row":153,"column":2},"end":{"row":154,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":154,"column":0},"end":{"row":154,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":154,"column":1},"end":{"row":155,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":155,"column":0},"end":{"row":155,"column":1},"action":"insert","lines":["\t"]}],[{"start":{"row":155,"column":1},"end":{"row":158,"column":2},"action":"insert","lines":["public function findAll(){","\t\treturn \\DB::table('properties')->where('property_type', '=', 'house')->orderBy('id', 'desc')->get();","\t    // return Property::where('property_type','house')->all();","\t}"],"id":4}],[{"start":{"row":155,"column":24},"end":{"row":155,"column":25},"action":"insert","lines":["b"],"id":5}],[{"start":{"row":155,"column":25},"end":{"row":155,"column":26},"action":"insert","lines":["y"],"id":6}],[{"start":{"row":155,"column":24},"end":{"row":155,"column":25},"action":"remove","lines":["b"],"id":7}],[{"start":{"row":155,"column":24},"end":{"row":155,"column":25},"action":"insert","lines":["B"],"id":8}],[{"start":{"row":155,"column":26},"end":{"row":155,"column":27},"action":"insert","lines":["L"],"id":9}],[{"start":{"row":155,"column":27},"end":{"row":155,"column":28},"action":"insert","lines":["O"],"id":10}],[{"start":{"row":155,"column":28},"end":{"row":155,"column":29},"action":"insert","lines":["c"],"id":11}],[{"start":{"row":155,"column":29},"end":{"row":155,"column":30},"action":"insert","lines":["a"],"id":12}],[{"start":{"row":155,"column":30},"end":{"row":155,"column":31},"action":"insert","lines":["t"],"id":13}],[{"start":{"row":155,"column":31},"end":{"row":155,"column":32},"action":"insert","lines":["i"],"id":14}],[{"start":{"row":155,"column":32},"end":{"row":155,"column":33},"action":"insert","lines":["o"],"id":15}],[{"start":{"row":155,"column":33},"end":{"row":155,"column":34},"action":"insert","lines":["n"],"id":16}],[{"start":{"row":155,"column":27},"end":{"row":155,"column":28},"action":"remove","lines":["O"],"id":17}],[{"start":{"row":155,"column":27},"end":{"row":155,"column":28},"action":"insert","lines":["o"],"id":18}],[{"start":{"row":155,"column":1},"end":{"row":155,"column":36},"action":"remove","lines":["public function findAllByLocation()"],"id":19},{"start":{"row":155,"column":1},"end":{"row":155,"column":46},"action":"insert","lines":["public function findAllByLocation($location);"]}],[{"start":{"row":156,"column":42},"end":{"row":156,"column":55},"action":"remove","lines":["property_type"],"id":20},{"start":{"row":156,"column":42},"end":{"row":156,"column":43},"action":"insert","lines":["l"]}],[{"start":{"row":156,"column":43},"end":{"row":156,"column":44},"action":"insert","lines":["o"],"id":21}],[{"start":{"row":156,"column":44},"end":{"row":156,"column":45},"action":"insert","lines":["c"],"id":22}],[{"start":{"row":156,"column":45},"end":{"row":156,"column":46},"action":"insert","lines":["a"],"id":23}],[{"start":{"row":156,"column":42},"end":{"row":156,"column":46},"action":"remove","lines":["loca"],"id":24},{"start":{"row":156,"column":42},"end":{"row":156,"column":50},"action":"insert","lines":["location"]}],[{"start":{"row":156,"column":58},"end":{"row":156,"column":65},"action":"remove","lines":["'house'"],"id":25},{"start":{"row":156,"column":58},"end":{"row":156,"column":59},"action":"insert","lines":["$"]}],[{"start":{"row":156,"column":59},"end":{"row":156,"column":60},"action":"insert","lines":["l"],"id":26}],[{"start":{"row":156,"column":60},"end":{"row":156,"column":61},"action":"insert","lines":["o"],"id":27}],[{"start":{"row":156,"column":61},"end":{"row":156,"column":62},"action":"insert","lines":["c"],"id":28}],[{"start":{"row":156,"column":62},"end":{"row":156,"column":63},"action":"insert","lines":["a"],"id":29}],[{"start":{"row":156,"column":63},"end":{"row":156,"column":64},"action":"insert","lines":["t"],"id":30}],[{"start":{"row":156,"column":64},"end":{"row":156,"column":65},"action":"insert","lines":["i"],"id":31}],[{"start":{"row":156,"column":65},"end":{"row":156,"column":66},"action":"insert","lines":["o"],"id":32}],[{"start":{"row":156,"column":66},"end":{"row":156,"column":67},"action":"insert","lines":["n"],"id":33}],[{"start":{"row":156,"column":33},"end":{"row":157,"column":0},"action":"insert","lines":["",""],"id":34},{"start":{"row":157,"column":0},"end":{"row":157,"column":2},"action":"insert","lines":["\t\t"]}],[{"start":{"row":157,"column":2},"end":{"row":157,"column":3},"action":"insert","lines":["\t"],"id":35}],[{"start":{"row":157,"column":3},"end":{"row":157,"column":4},"action":"insert","lines":["\t"],"id":36}],[{"start":{"row":157,"column":4},"end":{"row":157,"column":5},"action":"insert","lines":["\t"],"id":37}],[{"start":{"row":157,"column":40},"end":{"row":158,"column":0},"action":"insert","lines":["",""],"id":38},{"start":{"row":158,"column":0},"end":{"row":158,"column":5},"action":"insert","lines":["\t\t\t\t\t"]}],[{"start":{"row":156,"column":33},"end":{"row":157,"column":0},"action":"insert","lines":["",""],"id":39},{"start":{"row":157,"column":0},"end":{"row":157,"column":2},"action":"insert","lines":["\t\t"]}],[{"start":{"row":157,"column":2},"end":{"row":157,"column":3},"action":"insert","lines":["\t"],"id":40}],[{"start":{"row":157,"column":3},"end":{"row":157,"column":4},"action":"insert","lines":["\t"],"id":41}],[{"start":{"row":157,"column":4},"end":{"row":157,"column":5},"action":"insert","lines":["\t"],"id":42}],[{"start":{"row":157,"column":5},"end":{"row":157,"column":6},"action":"insert","lines":["-"],"id":43}],[{"start":{"row":157,"column":6},"end":{"row":157,"column":7},"action":"insert","lines":[">"],"id":44}],[{"start":{"row":157,"column":7},"end":{"row":157,"column":9},"action":"insert","lines":["()"],"id":45}],[{"start":{"row":157,"column":7},"end":{"row":157,"column":9},"action":"remove","lines":["()"],"id":46},{"start":{"row":157,"column":7},"end":{"row":157,"column":42},"action":"insert","lines":["where('property_type', '=', 'land')"]}],[{"start":{"row":157,"column":36},"end":{"row":157,"column":40},"action":"remove","lines":["land"],"id":47},{"start":{"row":157,"column":36},"end":{"row":157,"column":37},"action":"insert","lines":["h"]}],[{"start":{"row":157,"column":37},"end":{"row":157,"column":38},"action":"insert","lines":["o"],"id":48}],[{"start":{"row":157,"column":38},"end":{"row":157,"column":39},"action":"insert","lines":["u"],"id":49}],[{"start":{"row":157,"column":39},"end":{"row":157,"column":40},"action":"insert","lines":["s"],"id":50}],[{"start":{"row":157,"column":40},"end":{"row":157,"column":41},"action":"insert","lines":["e"],"id":51}],[{"start":{"row":159,"column":28},"end":{"row":160,"column":0},"action":"insert","lines":["",""],"id":52},{"start":{"row":160,"column":0},"end":{"row":160,"column":5},"action":"insert","lines":["\t\t\t\t\t"]}],[{"start":{"row":155,"column":45},"end":{"row":155,"column":46},"action":"remove","lines":[";"],"id":53}],[{"start":{"row":158,"column":40},"end":{"row":159,"column":0},"action":"insert","lines":["",""],"id":54},{"start":{"row":159,"column":0},"end":{"row":159,"column":5},"action":"insert","lines":["\t\t\t\t\t"]}],[{"start":{"row":159,"column":5},"end":{"row":159,"column":20},"action":"insert","lines":["->with('photo')"],"id":55}],[{"start":{"row":156,"column":9},"end":{"row":156,"column":33},"action":"remove","lines":["\\DB::table('properties')"],"id":56},{"start":{"row":156,"column":9},"end":{"row":156,"column":10},"action":"insert","lines":["p"]}],[{"start":{"row":156,"column":10},"end":{"row":156,"column":11},"action":"insert","lines":["r"],"id":57}],[{"start":{"row":156,"column":11},"end":{"row":156,"column":12},"action":"insert","lines":["o"],"id":58}],[{"start":{"row":156,"column":11},"end":{"row":156,"column":12},"action":"remove","lines":["o"],"id":59}],[{"start":{"row":156,"column":10},"end":{"row":156,"column":11},"action":"remove","lines":["r"],"id":60}],[{"start":{"row":156,"column":9},"end":{"row":156,"column":10},"action":"remove","lines":["p"],"id":61}],[{"start":{"row":156,"column":9},"end":{"row":156,"column":10},"action":"insert","lines":["P"],"id":62}],[{"start":{"row":156,"column":10},"end":{"row":156,"column":11},"action":"insert","lines":["r"],"id":63}],[{"start":{"row":156,"column":11},"end":{"row":156,"column":12},"action":"insert","lines":["o"],"id":64}],[{"start":{"row":156,"column":12},"end":{"row":156,"column":13},"action":"insert","lines":["p"],"id":65}],[{"start":{"row":156,"column":13},"end":{"row":156,"column":14},"action":"insert","lines":["e"],"id":66}],[{"start":{"row":156,"column":14},"end":{"row":156,"column":15},"action":"insert","lines":["r"],"id":67}],[{"start":{"row":156,"column":15},"end":{"row":156,"column":16},"action":"insert","lines":["t"],"id":68}],[{"start":{"row":156,"column":16},"end":{"row":156,"column":17},"action":"insert","lines":["y"],"id":69}],[{"start":{"row":156,"column":17},"end":{"row":156,"column":18},"action":"insert","lines":[":"],"id":70}],[{"start":{"row":156,"column":18},"end":{"row":156,"column":19},"action":"insert","lines":[":"],"id":71}],[{"start":{"row":156,"column":19},"end":{"row":157,"column":0},"action":"remove","lines":["",""],"id":72}],[{"start":{"row":156,"column":19},"end":{"row":156,"column":20},"action":"remove","lines":["\t"],"id":73}],[{"start":{"row":156,"column":19},"end":{"row":156,"column":20},"action":"remove","lines":["\t"],"id":74}],[{"start":{"row":156,"column":19},"end":{"row":156,"column":20},"action":"remove","lines":["\t"],"id":75}],[{"start":{"row":156,"column":19},"end":{"row":156,"column":20},"action":"remove","lines":["\t"],"id":76}],[{"start":{"row":156,"column":19},"end":{"row":156,"column":20},"action":"remove","lines":["\t"],"id":77}],[{"start":{"row":156,"column":19},"end":{"row":156,"column":20},"action":"remove","lines":["-"],"id":78}],[{"start":{"row":156,"column":19},"end":{"row":156,"column":20},"action":"remove","lines":[">"],"id":79}],[{"start":{"row":273,"column":35},"end":{"row":274,"column":41},"action":"remove","lines":["","\t    $house->coo_roo = $request->coo_roo;"],"id":80}]]},"ace":{"folds":[],"scrolltop":1669.5,"scrollleft":0,"selection":{"start":{"row":273,"column":35},"end":{"row":273,"column":35},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":138,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1518763860014,"hash":"0dd469662d91679477574995b4428a2f17efc4b9"}