using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Iterator
{
    interface IInventoryIterator<T>
    {
        bool IsDone();
        void Next();
        T Current();
    }
}
