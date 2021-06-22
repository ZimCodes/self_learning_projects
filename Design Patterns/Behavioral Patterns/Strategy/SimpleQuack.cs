using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Strategy
{
    class SimpleQuack : IQuackBehavior
    {
        public string Quack()
        {
            return "Quack Quack!";
        }
    }
}
