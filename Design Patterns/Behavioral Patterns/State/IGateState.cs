using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace State
{
    interface IGateState
    {
        void enter();
        void pay();
        void payok();
        void payfailed();
    }
}
