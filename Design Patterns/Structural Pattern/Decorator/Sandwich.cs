using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Decorator
{
    class Sandwich
    {

        public virtual string getDesc()
        {
            return "";
        }
        public virtual int Cost()
        {
            return 0;
        }
    }
}
