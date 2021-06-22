using System;
using System.Collections.Generic;
using System.Linq;
using System.Reflection;
using System.Text;
using System.Threading.Tasks;

namespace AdapterV2
{
    class OriginalGum : IBubblegum
    {

        Titanic titanic;
        public OriginalGum(Titanic _titanic)
        {
            titanic = _titanic;
        }
        public void AssignCaptain()
        {
            titanic.AssignNewCaptain("BlackBeard");
        }
    }
}
