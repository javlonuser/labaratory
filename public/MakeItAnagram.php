<?php
$str1 = "zjadbkhmquvpcedlhsarcjzfsnekawczfccjomvfirwkvbveuvvwgwdbkklmgnlorpxgdunmnjwkksoepjdwiixssigbytppioxoikcwtyggsvmigrgoadisnovlhkdsacgjpkhiinqdkdnruvhwyqrngmbozgiziqkxarikfyprdciazswxinnqaogzuoaeglcgcmrjmibqnlqmfmkpczgcnmdjddnjorqtfjesthkgvataofqqewutizendrxtlpoqatktauavwtylyodekaxuzbieuhyhwoayhkrkhrhdmfqmtwqfwpcxsmcntcwrqwpajikqctvobmduivcgleddqfslhreyntaydkqffmwgazdkuhqhltndbfqkyukmpkmswdycrukrvnbpurxhmkmprcaqykenvsgtvgvocgfxvgmqzlzoxmdrofjnqncnfkgdqersmzrhhgzhrzxrlcibirqagtnndvswbkqnlivsoubhvyygdgilzylftatxxlvzxloktldjierdfpkkyuvzuifokanhniinvzxrkcasjrwojiajcvkwfpmprzyhjjwfitwswylfqjvbrvmvswtxogohhmorvkydgwyeullmuipndbixybwojkvrwmkuykxegxicivpedergizfidbwmlrdkfpeezdihbtklobqsfhapjixmjtyxnehsvlyvqjcrcodsptmxcnmlxkxgfydsemnzxlwquzjypmrfhfcmuoxraxygvdyzqnapzxfvypundnsnswznnyenvetqiurahspirxepoacrpxghvfwigdwbjrurlntthldyihnyjqpypygkfevljrntkjmwwgreruebesznkqmzouluagfkzudkfpgexziotorxgqlqjzrxtdttlbdlxivdydhvcrmxffvmwiehjyecbyxobdzylwblzkjdbxbhcyvaibhrzovcosrpxsnlppwqzhudgxmjvjldktumhpqvjhkhczstqqjqafvgchrxsdccyyqfnhczqogsnalesxwsctbfaueuxjwxhpevwguowcjkewqwtorwhsdjojdmsbjasqxowtftvofzkxxenocuihfxqilllwnemkujdzeaplbckygxnktxtyulifwvcjzotwzyxdapqbrcazzpjsmcsjncomyqvzhrvgrvmsketbhvagklbznvicyyqwpmvyftewosqyxkzefzmsmntbjddhbwfskaqptxnhpehmqgqvhdptskubnakpwpjisaxlzmvoqcbglreuwvqpgmsvofkmuwumytaxgxlybmhmgljeibvonoketwqpunesggpmddleputxhcepfzgsnsyiqpalcgdimvxpykvpeoplstcxsiqiaostfsejyjukgrbgdxwhlnuggwdahvijmbcrvidwuxgaqkhtjfcuswaaugadbjnnmrhhakduhmwxydqhkudcsgemmfsnqfbcyilaspwbdtybyqkjknnctsqfxitnpwrqgcqatnbwibzgtlpfzfjsxzawkvlbrcrxekzaxayhdynwjfdkkmfjlffxasbtussaeradtzkyzywkdzxplcywjfwlxxetryvwrwzmxkkykgkpfheqjcoshmfgjlzdjuzasaormypwealljpdttsncgtiqgjtqgusyuhsjhjfojtzvkdoexdidyrvfcqxikpjhydqgmxuyqvtdyjhxmrdnkyunprxbiikhlapyajwsepvfaeemwhbgivvzotaxbngnpvnpgjimafrakyoifsonnkoefrbgehvteilktvwvaqvkomuvejltvzxcqykwhisnqdzmywhyoflerfbxqmqnoorgocdykvlcaloyjyyzdlfwtgtltlzhbsnqusqgpdjpqzpbxqacbfyumtghfhqgzfywyqcpunfknwommorqwrmknutsdjadobbmrfeltlyihmwwcnmahakuvdoyooddrerjkvwfgwnoijmnza";
$str2 = "ngaacvfquugxxyeqjomftsciimruzswpaxrcswuosbmpbqgkgupbmtjxgcthvqwxnnchmwwexkwyaeiiyajmtujzwfjtvfrkvtrhrplpzjpbnajlauavojxlogglnzviuprmefbeosfcsrpulpqabnnrttdivarpribwnecexjgraxmoneqqrfhmymutnnlgymcnrgrqszhuxvimzacsflggybznqmtozycseviwvrrspbgqcijhtpntspgjbazcyduczebuyuonvudxcofxeuryjxhlzjpxmkcloffoztduphstvzrbvkafjjsjshihtkskpayovclllfeigxkbhmgrxacskkzdvtnmtmdpqocbtgjzevaljjehlgzvrazotmcnafeqtgroodpsaqgkbmtmtuimujcpvecykiofoiudnlxnbdzesutlodzkmdajhehtnwbdgxitiggmliqdclqtordaudmektxxryazxjsgrbsejkilwaeksknopbszuqwoqznqkiwdjohsarfwsmhmwwanxtntlljdmztwhpbqfjkgapeudngzjhnicccnnnsammyvdalljxtlnxgqloswxhfzjjoyyjylvzgabunmrgxggfztwrptawvjhljguktrjbskxhwrovxwdypzpeurdpckbmsxwnpfpjroqpfgkdcnbtotajmdyppbbkzxxqeozxdrmiayneorycmynydonspqcqpcitqhstbeebftftkdxydlxgzmzqddjufroybitcnxfurmndsmcvzbcandrsganotdmulhyaffuysjdkyffxgjywmpqvrdlmizhwghwnntnherrcyyahkydypvvibgujhdfonedazrjdkagiagpkgulvqgfrnbcufkksoqunhdqrfybheruklfhdlowaqzxxjjpzzloiqgbxfdglwayjhhnvwjxokwlvgcwhnksftvcaaklwlliutvrrgpftlqotsldhxxmqsq";
$str1 = "cde";
$str2 = "abc";
/*print_r(str_split($str1));
print_r(str_split($str2));
print_r(array_diff(str_split($str1),str_split($str2)));*/

$array1 = count_chars($str1, 1);
$array2 = count_chars($str2, 1);
$arrayOneDiff = array_diff($array1, $array2);
$arrayTwoDiff = array_diff($array2, $array1);
print_r($arrayOneDiff);
print_r($arrayTwoDiff);
$count = 0;
foreach ($arrayOneDiff as $symbol => $countChars) {
    if ($symbol == $symbol) {
        //echo abs($arrayOneDiff[$symbol] - $arrayTwoDiff[$symbol]) . PHP_EOL;
        $count += abs($arrayOneDiff[$symbol] - $arrayTwoDiff[$symbol]);
        unset($arrayOneDiff[$symbol]);
        unset($arrayTwoDiff[$symbol]);
    } else {
        //$count +=$arrayOneDiff
    }
}
$count += array_sum($arrayOneDiff) + array_sum($arrayTwoDiff);
echo $count;
//print_r($arrayOneDiff);
//print_r($arrayTwoDiff);

//echo count(array_diff(str_split($str1),str_split($str2)))+count(array_diff(str_split($str2),str_split($str1)));