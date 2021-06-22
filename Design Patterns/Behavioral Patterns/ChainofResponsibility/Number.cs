using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ChainofResponsibility
{
    class Number
    {
        public int num1 { get; private set; }
        public int num2 { get;  private set; }
        public string calculationWanted { get; private set; }

        public Number(int n1, int n2,string calcwanted)
        {
            num1 = n1;
            num2 = n2;
            calculationWanted = calcwanted;
        }
    }
}
