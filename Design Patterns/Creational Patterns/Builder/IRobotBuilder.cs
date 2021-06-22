using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Builder
{
    interface IRobotBuilder
    {
        void buildRobotHead();
        void buildRobotTorso();
        void buildRobotArms();
        void buildRobotLegs();
        Robot getRobot();
    }
}
